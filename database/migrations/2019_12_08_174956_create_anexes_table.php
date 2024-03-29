<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnexesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anexes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('boarding_id');
            $table->string('NoOfRooms');
            $table->string('NoOfBed');
            $table->string('Acavalability');
            $table->string('kitchenavalability');
            $table->boolean('Withfurniture');
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
        Schema::dropIfExists('anexes');
    }
}
