<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public static $blog;

    public static function saveBlog($request){
        self::$blog = new Blog();
        self::$blog->category_id = $request->category_id;
        self::$blog->title = $request->title;
        self::$blog->desc = $request->desc;
        self::$blog->image = imageUpload($request->image,'blog-images');
        self::$blog->save();
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
