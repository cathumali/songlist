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
 
        factory(App\User::class, 20)->create()->each(function ($users) {
            // Seed the relation with one address
            $songs = factory(App\Songs::class)->make();
            $users->songs()->save($songs);
 
        });        

    }
}
