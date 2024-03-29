<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardingRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boarding_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('boardingType');
            $table->boolean('School_boys');
            $table->boolean('School_girls');
            $table->boolean('Uni_boys');
            $table->boolean('Uni_girls');
            $table->boolean('Office_boys');
            $table->boolean('Office_girls');
            $table->string('MonthlyRent');
            $table->string('KeyMoney');
            $table->text('Description');
            $table->string('Province');
            $table->string('District');
            $table->string('City');
            $table->string('Name');
            $table->string('Email');
            $table->string('Telephone');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('boarding_requests');
    }
}
