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
        sleep(1);
        if (Auth::user()->progression->setsail1 == true) {
            return view('story/0/setsail');
        } else {
            return view('story/0/prologue');
        }
    }

    public function one() {
        sleep(1);
        if (Auth::user()->progression->lubeck == true) {
            return view('story/1/chapter1');
        } else {
            return view('story/0/prologue');
        }
    }

    /*public function oneSetSail() {
        $user = Auth::user();
        $user->updateProgression('setsail2');
        return view('story/1/setsail');
    }*/

    public function oneASetSail() {
        sleep(1);
        if (Auth::user()->progression->setsail2 == true) {
            return view('story/1/setsail1a');
        } else {
            return view('story/0/prologue');
        }
    }

    public function oneBSetSail() {
        sleep(1);
        if (Auth::user()->progression->setsail2 == true) {
            return view('story/1/setsail1b');
        } else {
            return view('story/0/prologue');
        }
    }

    public function twoA() {
        sleep(1);
        if (Auth::user()->progression->visby == true) {
            return view('story/2/chapter2a');
        } else {
            return view('story/0/prologue');
        }
    }

    public function twoB() {
        sleep(1);
        if (Auth::user()->progression->danzig == true) {
            return view('story/2/chapter2b');
        } else {
            return view('story/0/prologue');
        }
    }

    public function twoSetSail() {
        sleep(1);
        if (Auth::user()->progression->setsail3 == true) {
            return view('story/2/setsail');
        } else {
            return view('story/0/prologue');
        }
    }

    public function three() {
        sleep(1);
        if (Auth::user()->progression->riga == true) {
            return view('story/3/chapter3');
        } else {
            return view('story/0/prologue');
        }
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
        sleep(1);
        if (Auth::user()->progression->riga == true) {
            return view('story/epilogue/epilogue');
        } else {
            return view('story/0/prologue');
        }
    }

}
