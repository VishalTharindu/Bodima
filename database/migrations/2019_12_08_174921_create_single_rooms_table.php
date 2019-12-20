<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSingleRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('single_rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('boarding_id');
            $table->string('NoOfBed');
            $table->boolean('Acavalability');
            $table->boolean('Withfurniture');
            $table->string('numberofbthroom');
            $table->timestamps();

            $table->foreign('boarding_id')
                ->references('id')
                ->on('boardings')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('single_rooms');
    }
}
