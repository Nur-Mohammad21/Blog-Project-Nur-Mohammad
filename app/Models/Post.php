<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    private static $post;
    private static $imageName;
    private static $imageUrl;
    private static $directory;

    public static function getImageUrl($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'post-image/';
        $image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory. self::$imageName;
        return self::$imageUrl;
    }
    public static function newPost($request)
    {
        self::$post = new Post();

        self::$post->category_id           = $request->category_id;
        self::$post->brand_name            = $request->brand_name;
        self::$post->product_name          = $request->product_name;
        self::$post->short_description      = $request->short_description;
        self::$post->long_description       = $request->long_description;
        self::$post->image                   = self::getImageUrl($request->file('image'));
        self::$post->save();
    }
    public static function updatePost($request, $id)
    {
        self::$post = Post::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$post->image))
            {
                unlink(self::$post->image);
            }
            self::$imageUrl = self::getImageUrl($request->file('image'));
        }
        else{
            self::$imageUrl = self::$post->image;
        }

        self::$post->category_id           = $request->category_id;
        self::$post->brand_name            = $request->brand_name;
        self::$post->product_name          = $request->product_name;
        self::$post->short_description      = $request->short_description;
        self::$post->long_description       = $request->long_description;
        self::$post->image                   = self::$imageUrl;
        self::$post->save();
    }
    public static function deletePost($id)
    {
        self::$post = Post::find($id);
        if(file_exists(self::$post->image))
        {
            unlink(self::$post->image);
        }
        self::$post->delete();
    }
    public static function statusPost($id)
    {
        self::$post = Post::find($id);
        if (self::$post->status == 0)
        {
            self::$post->status = 1;
            self::$post->save();
        }
        else
        {
            self::$post->status = 0;
            self::$post->save();
        }
    }
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

}
