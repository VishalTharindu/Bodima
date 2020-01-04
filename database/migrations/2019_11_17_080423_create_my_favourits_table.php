<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyFavouritsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_favourits', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->unsignedBigInteger('boarding_id');
            // $table->unsignedBigInteger('user_id');
            // $table->unsignedBigInteger('house_id')->nullable();
            // $table->unsignedBigInteger('anex_id')->nullable();
            // $table->unsignedBigInteger('singleroom_id')->nullable();
            $table->timestamps();

            
            // $table->foreign('boarding_id')
            //     ->references('id')
            //     ->on('boardings')
            //     ->onDelete('cascade');
    
            // $table->foreign('user_id')
            //     ->references('id')
            //     ->on('users')
            //     ->onDelete('cascade');
    
            // $table->foreign('house_id')
            //     ->references('id')
            //     ->on('houses')
            //     ->onDelete('cascade');
    
            // $table->foreign('anex_id')
            //     ->references('id')
            //     ->on('anexs')
            //     ->onDelete('cascade');
    
            // $table->foreign('singleroom_id')
            //     ->references('id')
            //     ->on('singlerooms')
            //     ->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('my_favourits');
    }
}
