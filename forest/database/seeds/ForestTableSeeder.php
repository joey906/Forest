<?php

use Illuminate\Database\Seeder;
use App\Models\Forest;

class ForestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(Forest::class, 15)->create();
    }
}
