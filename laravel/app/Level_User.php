<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level_User extends Model
{
	protected $table='level_user';

	protected $primaryKey='id_level_user';

	protected $fillable=['level_name'];
}