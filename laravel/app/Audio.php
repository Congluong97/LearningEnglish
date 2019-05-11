<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
    protected $table='audios';

    protected $fillable=['name','id_video','link','text'];
<<<<<<< HEAD

}
=======


    public function video(){
    	return $this->belongsTo('App\Video', "id_video");
    }
}	
>>>>>>> 816b7a5731929d90c617ccca33dda393e65b0129
