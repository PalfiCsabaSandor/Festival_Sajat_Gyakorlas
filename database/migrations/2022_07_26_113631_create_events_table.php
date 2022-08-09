<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('festival_id');
            $table->string('name');
            $table->string('picture'); #A blobra errort adott
            $table->text('description');
            $table->string('artist_name');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->decimal('latitude',7);
            $table->decimal('longitude',7);
            $table->timestamps();

            $table->foreign('festival_id')->references('id')->on('festivals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
