<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function checkName(Request $request) {
        $name = request()->validate([
            'name' => 'required'
        ]);
        return view('story/0/checkname', ['name' => $name['name']]);
    }
}
