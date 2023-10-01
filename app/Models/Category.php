<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public static $category;

    public static function saveCategory($request){
        self::$category = new Category();
        self::$category->name = $request->name;
        self::$category->desc = $request->desc;
        self::$category->image = imageUpload($request->image,'category-images');
        self::$category->save();
    }
}
