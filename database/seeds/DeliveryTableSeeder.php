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
        factory(Delivery::class, 30)->create();
    }
}
