<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $fillable=['category_id','body'];

    public function category(){

        return $this->belongsTo('App\Category');
    }
}
