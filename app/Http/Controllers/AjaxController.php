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

    public function askName() {
        return view('story/0/askname');
    }

    public function storeName(Request $request) {
        //store name
    }
}
