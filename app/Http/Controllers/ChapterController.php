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
        // $user->updateProgression('setsail1');
        return view('story/0/setsail');
    }

    public function one() {
        $user = Auth::user();
        // $user->updateProgression('lubeck');
        return view('story/1/chapter1');
    }

    /*public function oneSetSail() {
        $user = Auth::user();
        $user->updateProgression('setsail2');
        return view('story/1/setsail');
    }*/

    public function oneASetSail() {
        $user = Auth::user();
        // $user->updateProgression('setsail2');
        return view('story/1/setsail1a');
    }

    public function oneBSetSail() {
        $user = Auth::user();
        // $user->updateProgression('setsail2');
        return view('story/1/setsail1b');
    }

    public function twoA() {
        $user = Auth::user();
        // $user->updateProgression('visby');
        return view('story/2/chapter2a');
    }

    public function twoB() {
        $user = Auth::user();
        // $user->updateProgression('danzig');
        return view('story/2/chapter2b');
    }

    public function twoSetSail() {
        $user = Auth::user();
        // $user->updateProgression('setsail3');
        return view('story/2/setsail');
    }

    public function three() {
        $user = Auth::user();
        // $user->updateProgression('riga');
        return view('story/3/chapter3');
    }

    public function lubeck() {
        return view('story/1/lubeck');
    }
    

    public function artDealer() {
        $user = Auth::user();
        $user->updateProgression('lubeckstory');
        return view('story/1/artdealer');
    }

    public function artGallery() {
        return view('story/1/artgallery');
    }

    public function plague() {
        return view('story/1/plague');
    }

    public function epilogue() {
        $user = Auth::user();
        // $user->updateProgression('epilogue');
        return view('story/epilogue/epilogue');
    }

}
