<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['title', 'percent', 'category', 'user_id'];

    public static function add($fields)
    {
        //todo Добавить проверку полей перед добавлением записи в БД
        $skill = new static;
        $skill->fill($fields);
        $skill->save();

        return $skill;
    }
}

