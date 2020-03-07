<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function addresses()
    {
        return $this->hasMany('App\Contry', 'country_id');
    }
}
