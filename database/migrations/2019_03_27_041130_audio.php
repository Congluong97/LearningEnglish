<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Audio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     schema::create('audio',function($table){
        $table -> increments('id');
        $table -> string('name');
        $table -> integer('id_video');
        $table -> string('link');
        $table -> string('text');
    });
 }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         schema::dropIfExists('audio');
    }
}
