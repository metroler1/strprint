<?php

use Illuminate\Database\Seeder;

class CheckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('check')->delete();

//        $data = array(
//
//        );

        DB::table('check')->insert($data);

    }
}