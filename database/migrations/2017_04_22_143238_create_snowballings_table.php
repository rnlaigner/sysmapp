<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSnowballingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('snowballings', function(Blueprint $table)
		{
		  $table->integer('reference_id')->unsigned()->nullable();
		  $table->foreign('reference_id')->references('id')
				->on('papers')->onDelete('cascade');

		  $table->integer('referenced_by_id')->unsigned()->nullable();
		  $table->foreign('referenced_by_id')->references('id')
				->on('papers')->onDelete('cascade');
				
		  $table->string('search_type');

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
        Schema::dropIfExists('snowballings');
    }
}
