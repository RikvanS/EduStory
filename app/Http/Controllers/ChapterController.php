<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChapterController extends Controller
{
    public function prologue() {
        return view('story/0/prologue');
    }

    public function prologueSetSail() {
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

    public function lubeck() {
        return view('story/1/Lubeck');
    }

    public function artDealer() {
        return view('story/1/artDealer');
    }

    public function artGallery() {
        return view('story/1/artGallery');
    }

    public function epilogue() {
        return view('story/epilogue/epilogue');
    }
    
    public function plague() {
        return view('story/1/plague');
    }
}
