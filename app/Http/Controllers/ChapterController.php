<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChapterController extends Controller
{
    public function prologue() {
        $user = Auth::user();
        $user->updateProgression('prologue');
        return view('story/0/prologue');
    }

    public function prologueSetSail() {
        $user = Auth::user();
        $user->updateProgression('setsail1');
        return view('story/0/setsail');
    }

    public function one() {
        return view('story/1/chapter1');
    }

    public function oneSetSail() {
        return view('story/1/setsail');
    }

    public function twoA() {
        return view('story/2/chapter2a');
    }

    public function twoB() {
        return view('story/2/chapter2b');
    }

    public function twoSetSail() {
        return view('story/2/setsail');
    }

    public function three() {
        return view('story/3/chapter3');
    }

    public function epilogue() {
        return view('story/epilogue/epilogue');
    }
}
