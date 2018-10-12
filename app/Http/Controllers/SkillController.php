<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        return response()->json($skills);
    }

    public function store(Request $request)
    {
        $skill = Skill::add($request->all());

        //todo Изменить возвращаемый объект. Нужно возвращать статус?
        return response()->json($request->all());
    }
}
