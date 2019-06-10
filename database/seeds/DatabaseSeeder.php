<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UserCollectionSeeder::class);
		$this->call(MonitorCollectionSeeder::class);
        $this->call(CharacterCollectionSeeder::class);
        $this->call(CursoCollectionSeeder::class);
    }
}
