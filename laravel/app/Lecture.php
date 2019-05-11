<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $table='lectures';

    protected $fillable=['name','image','status','id_level'];

    public function level()
    {
    	return $this->belongsTo('App\Level','id_level');
    }
}
