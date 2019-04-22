<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
// <<<<<<< HEAD
    protected $table='histories';

// =======
    // protected $table='history';
// >>>>>>> 24d9bac04ec1c5ececaec42cd84299b017becccc
    protected $fillable=['id_audio','id_video','id_user'];
}
