<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BsBbsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('ja_JP');
        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <=10; $j++) {
                 $bbs = [
                    'post_id' => $j,
                    'comment_id' => $i,
                    'author' => $faker->name,
                    'comment' => $faker->realText,
                    'create_time'=> now(),
                    'update_time' => now(),
                ];
 
                DB::table('bs_bbs_table')->insert($bbs);
            }

        }
        //
    }
}
