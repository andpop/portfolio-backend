<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        return response()->json([
            [
            'id' => '1',
            'title' => 'PHP',
            'percents' => 50,
            'category' => 1,
            'user_id' => 9
            ],
            [
                'id' => '2',
                'title' => 'Git',
                'percents' => 70,
                'category' => 2,
                'user_id' => 9
            ],
        ]);
    }
}
