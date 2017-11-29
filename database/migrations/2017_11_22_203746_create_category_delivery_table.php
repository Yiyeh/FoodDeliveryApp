<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryDeliveryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_delivery', function (Blueprint $table) {
            
            $table->integer('category_id')->unsigned();
            $table->integer('delivery_id')->unsigned();

            
            $table->foreign('category_id')
                        ->references('id')->on('categories')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');  

            $table->foreign('delivery_id')
                        ->references('id')->on('deliveries')
                        ->onDelete('cascade')
                        ->onUpdate('cascade');
            
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_delivery');
    }
}
