<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyPortfolio extends Model
{
    use HasFactory;
    private static $portfolio;
    private static $imageName;
    private static $imageUrl;
    private static $directory;

    public static function getImageUrl($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'portfolio-image/';
        $image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory. self::$imageName;
        return self::$imageUrl;
    }
    public static function newPortfolio($request)
    {
        self::$portfolio = new MyPortfolio();

        self::$portfolio->title                  = $request->title;
        self::$portfolio->name                   = $request->name;
        self::$portfolio->short_description      = $request->short_description;
        self::$portfolio->long_description       = $request->long_description;
        self::$portfolio->image                  = self::getImageUrl($request->file('image'));
        self::$portfolio->save();
    }
    public static function updatePortfolio($request)
    {
        self::$portfolio = MyPortfolio::find($request->id);
        if($request->file('image'))
        {
            if(file_exists(self::$portfolio->image))
            {
                unlink(self::$portfolio->image);
            }
            self::$imageUrl = self::getImageUrl($request->file('image'));
        }
        else{
            self::$imageUrl = self::$portfolio->image;
        }

        self::$portfolio->title                  = $request->title;
        self::$portfolio->name                   = $request->name;
        self::$portfolio->short_description      = $request->short_description;
        self::$portfolio->long_description       = $request->long_description;
        self::$portfolio->image                  =  self::$imageUrl;
        self::$portfolio->save();
    }
    public static function deletePortfolio($id)
    {
        self::$portfolio = MyPortfolio::find($id);
        if(file_exists(self::$portfolio->image))
        {
            unlink(self::$portfolio->image);
        }
        self::$portfolio->delete();
    }
}
