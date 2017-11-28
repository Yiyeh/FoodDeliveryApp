<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveryCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_category', function (Blueprint $table) {
            $table->integer('delivery_id')->unsigned();
            $table->integer('category_id')->unsigned();

            $table->foreign('delivery_id')
                        ->references('id')->on('deliveries')
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
        Schema::dropIfExists('delivery_category');
    }
}
