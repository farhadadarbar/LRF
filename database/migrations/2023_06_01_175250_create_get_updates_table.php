<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGetUpdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('get_updates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sms')->default(false);
            $table->string('contact')->default(false);
            $table->string('calllog')->default(false);
            $table->string('gps')->default(false);
             $table->string('notification')->default(false);
             $table->string('serialNumber')->nullable();
            $table->integer('user_id')->unsigned();      
            $table->timestamps();
        });
          Schema::table('get_updates', function($table) {
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
        Schema::dropIfExists('get_updates');
    }
}
