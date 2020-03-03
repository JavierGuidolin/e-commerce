<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
  public $table='authors';
  public $guarded=[];

  public function book(){
    return $this->belongsToMany('App\Book','author_book','author_id','book_id');
  }
}
