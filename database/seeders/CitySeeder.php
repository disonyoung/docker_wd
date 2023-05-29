<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            ['name' => '成都'],
            ['name' => '青岛'],
            ['name' => '武汉'],
            ['name' => '济南'],
            ['name' => '西安'],
            ['name' => '上海'],
            ['name' => '合肥'],
            ['name' => '苏州'],
            ['name' => '北京'],

//            ['id','name' => '1','济南'],
//            ['id','name' => '2','合肥'],
//            ['id','name' => '3','苏州'],
//            ['id','name' => '4','西安'],
//            ['id','name' => '5','上海'],
//            ['id','name' => '6','成都'],
//            ['id','name' => '7','武汉'],
        ]);
    }
}
