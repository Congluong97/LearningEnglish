<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LevelUser extends Model
{
    protected $table='levelusers';

    protected $fillable=['name'];
}
