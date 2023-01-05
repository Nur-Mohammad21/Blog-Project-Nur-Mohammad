<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    private static $category;
    public static function newCategory($request)
    {
        self::$category = new Category();
        self::$category->name = $request->name;
        self::$category->description = $request->description;
        self::$category->save();
    }
    public static function updateCategory($request, $id)
    {
        self::$category = Category::find($id);

         self::$category->name         = $request->name;
         self::$category->description  = $request->description;
         self::$category->save();
    }
    public static function deleteCategory($id)
    {
        self::$category = Category::find($id);
        self::$category->delete();
    }
    public  static  function updateStatus($id)
    {
        self::$category = Category::find($id);
        if(self::$category->status==0)
        {
            self::$category->status = 1;
            self::$category->save();
        }
        else
        {
            self::$category->status = 0;
            self::$category->save();
        }
    }

}
