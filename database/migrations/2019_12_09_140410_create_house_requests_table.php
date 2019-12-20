<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHouseRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('house_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('boardingrequest_id');
            $table->string('NoOfRooms');
            $table->string('NoOfBed');
            $table->string('Acavalability');
            $table->string('kitchenavalability');
            $table->boolean('Withfurniture');
            $table->boolean('Gardenneed');
            // $table->boolean('Racks');
            // $table->boolean('More');
            $table->string('NumberOfBthroom');
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
        Schema::dropIfExists('house_requests');
    }
}
