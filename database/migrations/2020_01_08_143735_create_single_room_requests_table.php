<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSingleRoomRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('single_room_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('boardingrequest_id');
            $table->string('NoOfBed');
            $table->string('Acavalability');
            $table->boolean('Withfurniture');
            $table->timestamps();

            $table->foreign('boardingrequest_id')
                ->references('id')
                ->on('boarding_requests')
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
        Schema::dropIfExists('single_room_requests');
    }
}
