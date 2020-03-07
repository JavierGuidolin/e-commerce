<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function addresses()
    {
        return $this->hasMany('App\Address', 'city_id');
    }
}
