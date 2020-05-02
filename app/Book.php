<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;

    public $table = 'books';
    public $guarded = [];

    public function categoria()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }

    public function autor()
    {
        return $this->belongsToMany('App\Autor', 'author_book', 'book_id', 'author_id');
    }

    public function items()
    {
        return $this->hasMany('App\Item', 'book_id');
    }
}
