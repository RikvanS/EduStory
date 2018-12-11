<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProgressionController extends Controller
{

    public function lubeckstory() {
        $user = Auth::user();
        $user->updateProgression('lubeck-story');
    }

    public function lubeckchoice() {
        $user = Auth::user();
        $user->updateProgression('lubeck-choice');
    }

    public function gotovisby() {
        $user = Auth::user();
        $user->gotovisby('lubeck-choice');
    }

    public function gotodanzig() {
        $user = Auth::user();
        $user->gotodanzig('lubeck-choice');
    }

    public function visbybattleship() {
        $user = Auth::user();
        $user->updateProgression('visby-battleship');
    }

    public function visbyboatrepair() {
        $user = Auth::user();
        $user->updateProgression('visby-boatrepair');
    }

    public function danzighanoi() {
        $user = Auth::user();
        $user->updateProgression('danzig-hanoi');
    }

    public function danzigmemory() {
        $user = Auth::user();
        $user->updateProgression('danzig-memory');
    }

    public function rigaquiz() {
        $user = Auth::user();
        $user->updateProgression('riga-quiz');
    }
}
