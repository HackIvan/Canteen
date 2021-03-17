<?php

use Illuminate\Database\Seeder;

class SpecialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Special::class, 50)->create();
    }
}
