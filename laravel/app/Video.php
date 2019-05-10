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
<<<<<<< HEAD
// <<<<<<< HEAD
// =======

// >>>>>>> 816b7a5731929d90c617ccca33dda393e65b0129
=======

>>>>>>> f4dba6371c9d606bfbd9efa02f5d38136a13ae23
