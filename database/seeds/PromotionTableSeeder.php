<?php

use Illuminate\Database\Seeder;
use App\Promotion;

class PromotionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Promotion::class, 300)->create();
    }
}
