<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Imagenes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('imagenes',function(BluePrint $table){
            $table->string('id');
           // $table->foreign('id')->references('id')->on('peliculas');
            $table->string('img_mini');
            $table->string('img_wallpaper');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::dropIfExists('imagenes');
    }
}
