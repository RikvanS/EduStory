<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProgressionController extends Controller
{

    public function lubeckstory() {
        $user = Auth::user();
        $user->updateProgression('lubeckstory');
    }

    public function gotovisby() {
        $user = Auth::user();
        $user->gotovisby('lubeckchoice');
    }

    public function gotodanzig() {
        $user = Auth::user();
        $user->gotodanzig('lubeckchoice');
    }

    public function visbybattleship() {
        $user = Auth::user();
        $user->updateProgression('visbybattleship');
    }

    public function visbyboatrepair() {
        $user = Auth::user();
        $user->updateProgression('visbyboatrepair');
    }

    public function danzighanoi() {
        $user = Auth::user();
        $user->updateProgression('danzighanoi');
    }

    public function danzigmemory() {
        $user = Auth::user();
        $user->updateProgression('danzigmemory');
    }

    public function rigaquiz() {
        $user = Auth::user();
        $user->updateProgression('rigaquiz');
    }
}
