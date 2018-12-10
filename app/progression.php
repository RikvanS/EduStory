<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class progression extends Model
{
    public function userprogression()
    {
        return $this->belongsTo('App\User');
    }
    
    public $timestamps = false;

}
