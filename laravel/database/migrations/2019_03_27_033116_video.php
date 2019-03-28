<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Video extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video',function(Blueprint $table){
           $table->bigIncrements('id');
           $table -> string('name');
           $table -> string('link');
           $table -> string('description');
           $table -> string('time');
           $table -> integer('id_lecture')->unsigned();
         //  $table -> foreign ('id_lecture')->references('id')->on('lectures');
           $table->timestamps();
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
     schema::dropIfExists('video');
 }
}