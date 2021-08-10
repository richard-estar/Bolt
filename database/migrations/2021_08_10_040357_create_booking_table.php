<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("fname", 50);
            $table->string("lname", 50);
            $table->string("email", 255);
            $table->string("phone", 50);
            $table->string("destination", 255);
            $table->integer("guests");
            $table->date("date");
            // $table->float("subtotal", 2);
            // $table->float("tax", 2);
            $table->float("total", 2);
            $table->string("lastfour", 4);
            $table->string("transactionId");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
}
