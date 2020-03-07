<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    public function addresses()
    {
        return $this->hasMany('App\Address', 'state_id');
    }

}
