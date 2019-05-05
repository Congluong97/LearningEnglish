<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model

{
    protected $table='videos';

    protected $fillable=['name','link','description','time','id_lecture'];

    public function lecture(){
    	return $this->belongsTo('App\Lecture','id_lecure');
    }
}
