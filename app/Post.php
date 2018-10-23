<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'date', 'content', 'user_id'];

    public static function add($fields)
    {
        //todo Добавить проверку полей перед добавлением записи в БД
        $post = new static;
        $post->fill($fields);
        $post->save();

        return $post;
    }

}
