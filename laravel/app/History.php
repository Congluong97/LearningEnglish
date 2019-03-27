<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table='history';

    protected $fillable=['id_audio','id_video','id_user'];
}
