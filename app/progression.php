<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class progression extends Model
{
    protected $guarded = [];
    public function userprogression()
    {
        return $this->belongsTo('App\User');
    }
    
    public $timestamps = false;

}
