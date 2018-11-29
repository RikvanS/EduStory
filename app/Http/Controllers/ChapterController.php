<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChapterController extends Controller
{
    public function prologue() {
        return view('story/0/prologue');
    }

    public function oneA() {
        return view('story/1/choicea');
    }

    public function oneB() {
        return view('story/1/choiceb');
    }

    public function two() {
        return view('story/2/chapter2');
    }

    public function epilogue() {
        return view('story/epilogue/epilogue');
    }
}
