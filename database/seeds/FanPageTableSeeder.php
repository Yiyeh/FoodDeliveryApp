<?php

use Illuminate\Database\Seeder;
use App\FanPage;

class FanPageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(FanPage::class, 10) ->create();
    }
}
