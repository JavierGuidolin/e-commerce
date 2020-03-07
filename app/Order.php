<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function orders()
    {
        return $this->hasMany('App\Item', 'order_id');
    }
}
