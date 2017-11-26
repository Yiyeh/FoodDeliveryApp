<?php

use Illuminate\Database\Seeder;
use App\FoodPlace;

class FoodPlaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(FoodPlace::class, 50) ->create();
    }
}
