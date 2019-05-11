<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    protected $table='audios';

    protected $fillable=['name','id_video','link','text'];



    public function video(){
    	return $this->belongsTo('App\Video', "id_video");
    }
}	

