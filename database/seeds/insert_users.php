<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Profession;
class insert_users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profession_id = Profession::where('title', 'Back-end Developer')->value('id');


      factory(User::class)->create([
        'name' => 'Matias',
        'email' => 'm@gmail.com',
        'password' => bcrypt('admin'),
        'profession_id' => $profession_id,
      ]);

      factory(User::class)->times(20)->create([
        'profession_id' => $profession_id,
      ]);

      factory(User::class)->times(20)->create([
        'profession_id' => 2,
      ]);

      factory(User::class)->times(9)->create();
    }

}
