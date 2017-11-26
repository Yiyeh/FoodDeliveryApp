<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('foodplace_id')->unsigned();
            $table->string('title');
            $table->string('photo');
            $table->string('description');
            $table->integer('price');

            $table->timestamps();

            $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');

            $table->foreign('foodplace_id')
                    ->references('id')->on('foodPlaces')
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
        Schema::dropIfExists('promotions');
    }
}
