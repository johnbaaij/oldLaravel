<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //


        Schema::create('beers', function (Blueprint $table) {
           $table->increments('id');
           $table->string('name');
           $table->string('brand');
           $table->integer('minWeight');
           $table->integer('maxWeight');
           $table->integer('red');
           $table->integer('green');
           $table->integer('blue');
           $table->integer('count');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
