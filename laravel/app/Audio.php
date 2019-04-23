<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    protected $table='audios';

    protected $fillable=['name','id_video','link','text'];
<<<<<<< HEAD

    public function video(){
    	return $this->belongsTo('App\Video', "id_video");
    }
=======
>>>>>>> 24d9bac04ec1c5ececaec42cd84299b017becccc
}
