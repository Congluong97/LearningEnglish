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
// <<<<<<< HEAD
// =======

// >>>>>>> 816b7a5731929d90c617ccca33dda393e65b0129
