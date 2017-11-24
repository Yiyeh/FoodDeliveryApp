<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodplaceCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foodplace_category', function (Blueprint $table) {
            $table->integer('food_place_id')->unsigned();
            $table->integer('category_id')->unsigned();

            $table->foreign('food_place_id')
                        ->references('id')->on('food_places')
                        ->onDelete('cascade');

            $table->foreign('category_id')
                        ->references('id')->on('categories')
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
        Schema::dropIfExists('foodplace_category');
    }
}
