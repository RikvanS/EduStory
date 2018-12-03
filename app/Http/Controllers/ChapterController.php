<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChapterController extends Controller
{
    public function prologue() {
        return view('story/0/prologue');
    }

    public function one() {
        return view('story/1/chapter1');
    }

    public function twoA() {
        return view('story/2/chapter2a');
    }

    public function twoB() {
        return view('story/2/chapter2b');
    }

    public function three() {
        return view('story/3/chapter3');
    }

    public function epilogue() {
        return view('story/epilogue/epilogue');
    }
}
