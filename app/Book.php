<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
  public $table='books';
  public $guarded=[];

  public function categoria(){
    return $this->belongsTo('App\Category','category_id');
  }
  public function autor(){
    return $this->belongsToMany('App\Autor','author_book','book_id','author_id');
  }
}
