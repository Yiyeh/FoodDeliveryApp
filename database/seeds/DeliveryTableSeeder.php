<?php

use Illuminate\Database\Seeder;
use App\Delivery;

class DeliveryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Delivery::class, 30)->create()->each(function(App\Delivery $delivery){
        	$delivery->categories()->attach([
        		rand(1,5),
        		rand(6,14),
        		rand(15,20),
        	]);
        });
    }
}
