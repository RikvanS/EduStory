<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AjaxController extends Controller
{

    public function checkName(Request $request) {
        if (request('name') != "") {
            $name = request('name');
            return view('story/0/checkname', ['name' => $name]);
        } else {
            return view('story/0/askname');
        }
    }

    public function askName() {
        return view('story/0/askname');
    }

    public function storeName(Request $request) {
        $user = Auth::user();
        $name = request()->validate([
            'name' => 'Required'
        ]);
        $user->update($name);
        return view('story/0/askage');
    }

    public function checkAge(Request $request) {
        $age = request('age');
        

        if (intval($age)) {
            return view('story/0/checkage', ['age' => intval($age)]);
        } else {
            return view('story/0/askage');
        }
    }

    public function askAge() {
        return view('story/0/askage');
    }

    public function storeAge(Request $request) {
        $user = Auth::user();
        $age = request()->validate([
            'age' => ['required', 'integer']
        ]);
        $user->update($age);
        return view('story/0/continue');
    }
}
