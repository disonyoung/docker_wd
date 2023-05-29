<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZhenyingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zhenyings')->insert([
            ['name' => '水滴'],
            ['name' => '元保'],
            ['name' => '轻松筹'],
            ['name' => '众安'],
            ['name' => 'i云保'],
            ['name' => '星火保'],
            ['name' => '自建'],
            ['name' => '质检'],
            ['name' => '续服'],

//            ['id','name'=> '1','水滴'],
//            ['id','name'=> '2','元保'],
//            ['id','name'=> '3','轻松筹'],
//            ['id','name'=> '4','众安'],
//            ['id','name'=> '5','i云保'],
//            ['id','name'=> '6','星火保'],
//            ['id','name'=> '7','自建'],
//            ['id','name'=> '8','质检'],
//            ['id','name'=> '9','续服'],
        ]);
    }
}
