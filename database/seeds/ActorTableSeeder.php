<?php

use Illuminate\Database\Seeder;
use App\Actor as Actor;
use Faker\Factory as Faker;

class ActorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 10) as $index){
            $actor = new Actor;
            $actor->name = $faker->name;
            $actor->save();
        }
    }
}
