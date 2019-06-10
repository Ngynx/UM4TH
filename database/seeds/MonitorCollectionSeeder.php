<?php

use Illuminate\Database\Seeder;

class MonitorCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Monitor::class, 5)->create();
        //
    }
}
