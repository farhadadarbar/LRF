<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCallLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('call_logs', function (Blueprint $table) {
             $table->increments('id');
            $table->string('FNamber')->nullable();
            $table->string('CMNamber')->nullable();
            $table->string('Number')->nullable();
            $table->string('Name')->nullable();
            $table->string('TYPE')->nullable();
            $table->string('DATE')->nullable();
            $table->string('DURATION')->nullable();
            $table->string('ACCOUNTID')->nullable();
            $table->string('SIMNAME')->nullable();
            $table->integer('user_id')->unsigned();
              $table->string('serialNumber');
        });
         Schema::table('call_logs', function($table) {
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
        Schema::dropIfExists('call_logs');
    }
}
