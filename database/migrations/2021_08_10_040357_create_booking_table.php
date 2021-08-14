<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

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
            $table->string("fname", 50)->nullable();
            $table->string("lname", 50)->nullable();
            $table->string("email", 255)->nullable();
            $table->string("phone", 50)->nullable();
            $table->string("destination", 255)->nullable();
            $table->integer("guests")->nullable();
            $table->date("date")->nullable();
            // $table->float("subtotal", 2);
            // $table->float("tax", 2);
            $table->float("total")->nullable();
            $table->string("lastfour")->nullable();
            $table->string("transactionId")->nullable();
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
