<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Autor extends Model
{
    use SoftDeletes;

    public $table = 'authors';
    public $guarded = [];

    public function book()
    {
        return $this->belongsToMany('App\Book', 'author_book', 'author_id', 'book_id');
    }
}
