<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('description');
            $table->string('email');
            $table->string('website');
            $table->string('city');

            $table->string('latitude');
            $table->string('longitude');
            $table->string('logo');
            $table->date('startdate');
            $table->date('enddate');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('youtube');
            $table->string('cover');
            $table->string('tags');

        });
        Schema::create('images', function (Blueprint $table) {

            $table->id();
            $table->string('name')->nullable();
            $table->string('path')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('discoveries_id')->nullable();
            $table->foreign('discoveries_id')->references('id')->on('discoveries')->onDelete('cascade');
            $table->unsignedBigInteger('events_id')->nullable();
            $table->foreign('events_id')->references('id')->on('events')->onDelete('cascade');
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
        Schema::dropIfExists('images');
    }

}

