<?php

use Illuminate\Database\Seeder;
use App\Type as Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['2D', '3D'];

        foreach($types as $type){
            $t = new Type;
            $t->type = $type;
            $t->save();
        }
    }
}
