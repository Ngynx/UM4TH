<?php

use Illuminate\Database\Seeder;

class CursoCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Curso::class, 6)->create();
        //
    }
}
