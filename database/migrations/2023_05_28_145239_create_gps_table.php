<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('altitude')->nullable();
            $table->string('longitude')->nullable();
        
            $table->integer('user_id')->unsigned();
              $table->string('serialNumber');
        });
         Schema::table('gps', function($table) {
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
        Schema::dropIfExists('gps');
    }
}
