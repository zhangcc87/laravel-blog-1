<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','slug','sort'];

    public function articles()
    {
        return $this->hasMany(Article::class, 'cate_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getCategoryAll()
    {
        return self::all();
    }

    public static function getCategoryArray()
    {
        return self::lists('name', 'id');
    }

}
