<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnexRequstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anex_requsts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('boardingrequest_id');
            $table->string('NoOfRooms');
            $table->string('NoOfBed');
            $table->string('Acavalability');
            $table->string('kitchenavalability');
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
        Schema::dropIfExists('anex_requsts');
    }
}
