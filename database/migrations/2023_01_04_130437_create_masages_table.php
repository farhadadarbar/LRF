<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sender')->nullable();
            $table->string('texte')->nullable();
            $table->string('date')->nullable();
            $table->integer('user_id')->unsigned(); 
             $table->string('serialNumber'); 
        });
          Schema::table('masages', function($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
          });
      
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masages');
    }
}
