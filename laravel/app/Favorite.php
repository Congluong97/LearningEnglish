<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $table='favorites';

    protected $fillable=['id_user','id_lecture'];
}
