<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeattypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seattypes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('room_id');
            $table->string("seatrow");
            $table->integer("seatprice");
            $table->integer("quantity");
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
        Schema::dropIfExists('seattypes');
    }
}
