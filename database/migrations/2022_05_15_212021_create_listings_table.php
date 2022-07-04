<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('listing_title');
            $table->string('status');
            $table->string('keywords');
            $table->string('category');
            $table->string('tags');
            $table->string('listing_tags');
            $table->string('city');
            $table->string('address');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('logo');
            $table->string('cover');
            $table->string('gallery');
            $table->string('name');
            $table->string('email');
            $table->string('title');
            $table->string('tagline');
            $table->text('description');
            $table->string('phone');
            $table->string('monday_open');
            $table->string('monday_closed');
            $table->string('Tuesday_open');
            $table->string('Tuesday_closed');
            $table->string('Wednesday_open');
            $table->string('Wednesday_closed');
            $table->string('Thursday_open');
            $table->string('Thursday_closed');
            $table->string('Friday_open');
            $table->string('Friday_closed');
            $table->string('Saturday_open');
            $table->string('Saturday_closed');
            $table->string('Sunday_open');
            $table->string('Sunday_closed');
            $table->string('features');
            $table->string('price');
            $table->string('video');
            $table->string('etat');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listings');
    }
}
