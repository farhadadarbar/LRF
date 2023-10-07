<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiviceInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('divice_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('serialNumber');
            $table->string('model')->nullable();
            $table->string('brand')->nullable();
            $table->integer('user_id')->unsigned(); 
        });
         Schema::table('divice_infos', function($table) {
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
        Schema::dropIfExists('divice_infos');
    }
}
