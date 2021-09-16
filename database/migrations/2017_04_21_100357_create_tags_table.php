<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('tags', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('beer_id') -> unsigned();
       });



       Schema::table('tags', function($table) {
         $table->foreign('beer_id')->references('id')->on('beers');

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
