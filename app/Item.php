<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function order()
    {
        return $this->belongsTo('App\Order', 'order_id');
    }

    public function book()
    {
        return $this->belongsTo('App\Book', 'book_id');
    }
}
