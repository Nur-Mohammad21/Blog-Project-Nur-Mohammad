<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    protected $guarded = [];
    use HasFactory;
    private static $member;
    private static $imageName;
    private static $imageUrl;
    private static $directory;

    public static function getImageUrl($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'member-image/';
        $image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory. self::$imageName;
        return self::$imageUrl;
    }
    public static function newMember($request)
    {
        if(!empty($request->file('image')))
        {
            $image = self::getImageUrl($request->file('image'));
        }
        else
        {
            $image = '';
        }
        self::$member = new Member();

        self::$member->name   = $request->name;
        self::$member->email   = $request->email;
        self::$member->password   = bcrypt($request->password);
        self::$member->phone   = $request->phone;
        self::$member->address   = $request->address??'';
        self::$member->image   = $image;
        self::$member->save();
    }
    public static function updateMember($request)
    {
        self::$member = Member::find($request->id);
        if($request->file('image'))
        {
            if(file_exists(self::$member->image))
            {
                unlink(self::$member->image);
            }
            self::$imageUrl = self::getImageUrl($request->file('image'));
        }
        else{
            self::$imageUrl = self::$member->image;
        }

        self::$member->name   = $request->name;
        self::$member->email   = $request->email;
        self::$member->password   = bcrypt($request->password);
        self::$member->phone   = $request->phone;
        self::$member->address   = $request->address;
        self::$member->image   = self::$imageUrl;
        self::$member->save();
    }
    public static function deleteMember($id)
    {
        self::$member = Member::find($id);
        if (file_exists(self::$member->image))
        {
            unlink(self::$member->image);
        }
        self::$member->delete();
    }
}
