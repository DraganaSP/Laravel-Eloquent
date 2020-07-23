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
        $this->call(ActorTableSeeder::class);
        $this->call(DirectorsTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(RatingsTableSeeder::class);
        $this->call(TypesTableSeeder::class);
    }
}
