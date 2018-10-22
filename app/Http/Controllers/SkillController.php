<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::all();
//        return response()->json($skills);
        return response()->json($skills)->header('Access-Control-Allow-Origin', '*');
//        return response()->json($skills)->setStatusCode(200);
//        return response(array($skills), 202);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $skill = Skill::add($request->all());

        if ($skill) {
            return response()->json($request->all())->setStatusCode(201);
        } else {
            return response()->json($request->all())->setStatusCode(500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        $skill = Skill::findOrFail($id);
        $skill = Skill::find($id);
        if ($skill == null) {
            return response()->json(['message' => "Record {$id} not found"])->setStatusCode(503);
        } else {
            $skill->delete();
            return response()->json(['message' => "Record {$id} was deleted"])->setStatusCode(202);
        }
    }
}
