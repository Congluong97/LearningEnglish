<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vocabulary extends Model
{
    protected $table='vocabularies';

    protected $fillable=['name','mean','pronunciation','id_lecture'];

    public function lecture()
    {
    	return $this->belongsTo('App\Lecture','id_lecture');
    }
}
