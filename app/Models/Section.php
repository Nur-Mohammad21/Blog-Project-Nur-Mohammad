<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    private static $section;
    private static $imageName;
    private static $imageUrl;
    private static $directory;

    public static function getImageUrl($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'section-image/';
        $image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory. self::$imageName;
        return self::$imageUrl;
    }
    public static function newSection($request)
    {
        self::$section = new Section();

        self::$section->title               = $request->title;
        self::$section->create              = $request->create;
        self::$section->short_description   = $request->short_description;
        self::$section->long_description    = $request->long_description;
        self::$section->image               = self::getImageUrl($request->file('image'));
        self::$section->save();
    }

    public static function updateSection($request)
    {
        {
            self::$section = Section::find($request->id);
            if($request->file('image'))
            {
                if(file_exists(self::$section->image))
                {
                    unlink(self::$section->image);
                }
                self::$imageUrl = self::getImageUrl($request->file('image'));
            }
            else{
                self::$imageUrl = self::$section->image;
            }

            self::$section->title                   = $request->title;
            self::$section->create                  = $request->create;
            self::$section->short_description       = $request->short_description;
            self::$section->long_description        = $request->long_description;
            self::$section->image                   =  self::$imageUrl;
            self::$section->save();
        }
    }

    public static function statusSection($id)
    {
        self::$section = Section::find($id);
        if (self::$section->status == 0)
        {
            self::$section->status = 1;
            self::$section->save();
        }
        else
        {
            self::$section->status = 0;
            self::$section->save();
        }
    }
}
