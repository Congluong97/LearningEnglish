<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
<<<<<<< HEAD
// <<<<<<< HEAD
{
    protected $table='videos';

    protected $fillable=['name','link','description','time','id_lecture'];

    public function lecture(){
    	return $this->belongsTo('App\Lecture','id_lecure');
    }
}
=======
<<<<<<< HEAD
{
    //
=======
{ 
	protected $table='videos';

	protected $fillable=['name','link','description','time','id_lecture'];
>>>>>>> c9a3a81ba3f5d1d48f2360fd16d7e234a5a40cf5
}
>>>>>>> 24d9bac04ec1c5ececaec42cd84299b017becccc
