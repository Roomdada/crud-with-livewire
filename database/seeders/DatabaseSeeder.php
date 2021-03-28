<?php

namespace Database\Seeders;

use App\Models\Filleul;
use App\Models\Level;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        /*for ($i = 0; $i <= 3; $i++) {
            Level::create(['name' => 'level '.$i]);
        }*/
      for($i=0; $i<100; $i++){
        User::create(
            [
                'nom' => "user_$i",
                'prenom' => "prenomuser_$i",
                'contact' => "XXXXXXXXXX",
                'age' => rand(10,60),
                'password' => Hash::make('jesuisdev'),
            ]);

          }
    }
}
