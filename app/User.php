<?php

namespace App;

use App\progression;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function progression()
    {
        return $this->hasOne('App\progression');
    }

    public function createProgression() {
        $data = ['user_id' => $this->id];
        progression::create($data);
    }

    public function updateProgression($column) {
        $this->progression->update([$column => true]);
    }

    public function gotovisby($column) {
        $this->progression->update([$column => 1]);
    }

    public function gotodanzig($column) {
        $this->progression->update([$column => 2]);
    }
}