<?php

use Illuminate\Database\Seeder;
use App\Ordercomment;

class OrdercommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Ordercomment::class, 300) ->create();
    }
}
