<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Profession;
class insert_professions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Profession::create([
          'title' => 'Back-end Developer'
        ]);
        Profession::create([
        'title' => 'Front-end Developer'
        ]);


        factory(Profession::class)->times(17)->create();
    }
}
