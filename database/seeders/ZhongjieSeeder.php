<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZhongjieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zhongjies')->insert([
            [
//                'id' => '1',
                'name' => '恒丰',
                'type' => '经纪',
                'contact' => '叶珅',
//                'email' => '叶珅',
            ],[
//                'id' => '2',
                'name' => '华康',
                'type' => '代理',
                'contact' => '包雪利Shirley',
//                'email' => '叶珅',
            ],[
//                'id' => '3',
                'name' => '凯森',
                'type' => '代理',
                'contact' => '车',
//                'email' => '叶珅',
            ],[
//                'id' => '4',
                'name' => '白鸽宝',
                'type' => '经纪',
                'contact' => '王毅',
//                'email' => '叶珅',
            ],[
//                'id' => '5',
                'name' => '元保数科',
                'type' => '其他',
                'contact' => '马晓俊',
//                'email' => '叶珅',
            ],[
//                'id' => '6',
                'name' => '纵情向前',
                'type' => '其他',
                'contact' => '刘娟',
//                'email' => '叶珅',
            ],[
//                'id' => '7',
                'name' => '星火数智',
                'type' => '其他',
                'contact' => '丁青',
//                'email' => '叶珅',
            ],
        ]);
    }
}
