<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function city()
    {
        return $this->belongsTo('App\City', 'city_id');
    }

    public function country()
    {
        return $this->belongsTo('App\Contry', 'country_id');
    }

    public function state()
    {
        return $this->belongsTo('App\State', 'state_id');
    }
}
