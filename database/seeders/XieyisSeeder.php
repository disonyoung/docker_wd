<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class XieyisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//                'id' => '1','zjmingcheng' => '恒丰',
//                'id' => '2','zjmingcheng' => '华康',
//                'id' => '3','zjmingcheng' => '凯森',
//                'id' => '4','zjmingcheng' => '白鸽宝',
//                'id' => '5','zjmingcheng' => '元保数科',
//                'id' => '6','zjmingcheng' => '纵情向前',

//            ['xingming' => '水滴'],1
//            ['xingming' => '元保'],2
//            ['xingming' => '轻松筹'],3
//            ['xingming' => '众安'],4
//            ['xingming' => 'i云保'],5
//            ['xingming' => '星火保'],6
//            ['xingming' => '自建'],7
//            ['xingming' => '质检'],8
//            ['xingming' => '续服'],9

//            ['city' => '济南'],1
//            ['city' => '合肥'],2
//            ['city' => '苏州'],3
//            ['city' => '西安'],4
//            ['city' => '上海'],5
//            ['city' => '成都'],6
//            ['city' => '武汉'],7

        DB::table('xieyis')->insert([
            [
            'intermediary_id' => '1',//恒丰
            'settle_intermediary_id' => '1',
            'partner_id' => '1',//水滴
            'city_id' => '6',//上海
            'agreement' => '坐席费_恒丰_水滴_上海_2200',
            'type' => '1',//坐席费：1 系统费：2
            'price' => '2200',
            'rule' => '1',//峰值人力：1 固定费用：2
            ],[
            'intermediary_id' => '1',//恒丰
            'settle_intermediary_id' => '1',
            'partner_id' => '2',//元保
            'city_id' => '6',//上海
            'agreement' => '坐席费_恒丰_元保_上海_2200',
            'type' => '1',//坐席费：1 系统费：2
            'price' => '2200',
            'rule' => '1',//峰值人力：1 固定费用：2
            ],[
            'intermediary_id' => '1',//恒丰
            'settle_intermediary_id' => '1',
            'partner_id' => '4',//众安
            'city_id' => '6',//上海
            'agreement' => '坐席费_恒丰_众安_上海_2200',
            'type' => '1',//坐席费：1 系统费：2
            'price' => '2200',
            'rule' => '1',//峰值人力：1 固定费用：2
            ],[
            'intermediary_id' => '2',//华康
            'settle_intermediary_id' => '2',
            'partner_id' => '1',//水滴
            'city_id' => '1',//成都
            'agreement' => '坐席费_华康_水滴_成都_38500',
            'type' => '1',//坐席费：1 系统费：2
            'price' => '38500',
            'rule' => '2',//峰值人力：1 固定费用：2
            ],[
            'intermediary_id' => '2',//华康
            'settle_intermediary_id' => '2',
            'partner_id' => '1',//水滴
            'city_id' => '7',//合肥
            'agreement' => '坐席费_华康_水滴_合肥_1568',
            'type' => '1',//坐席费：1 系统费：2
            'price' => '1568',
            'rule' => '1',//峰值人力：1 固定费用：2
            ],[
            'intermediary_id' => '2',//华康
            'settle_intermediary_id' => '2',
            'partner_id' => '1',//水滴
            'city_id' => '4',//济南
            'agreement' => '坐席费_华康_水滴_济南_1500',
            'type' => '1',//坐席费：1 系统费：2
            'price' => '1500',
            'rule' => '1',//峰值人力：1 固定费用：2
            ],[
            'intermediary_id' => '2',//华康
            'settle_intermediary_id' => '2',
            'partner_id' => '1',//水滴
            'city_id' => '6',//上海
            'agreement' => '坐席费_华康_水滴_上海_2200',
            'type' => '1',//坐席费：1 系统费：2
            'price' => '2200',
            'rule' => '1',//峰值人力：1 固定费用：2
            ],[
            'intermediary_id' => '2',//华康
            'settle_intermediary_id' => '2',
            'partner_id' => '1',//水滴
            'city_id' => '8',//苏州
            'agreement' => '坐席费_华康_水滴_苏州_1568',
            'type' => '1',//坐席费：1 系统费：2
            'price' => '1568',
            'rule' => '1',//峰值人力：1 固定费用：2
            ],[
            'intermediary_id' => '2',//华康
            'settle_intermediary_id' => '2',
            'partner_id' => '1',//水滴
            'city_id' => '5',//西安
            'agreement' => '坐席费_华康_水滴_西安_1568',
            'type' => '1',//坐席费：1 系统费：2
            'price' => '1568',
            'rule' => '1',//峰值人力：1 固定费用：2
            ],[
            'intermediary_id' => '2',//华康
            'settle_intermediary_id' => '2',
            'partner_id' => '2',//元保
            'city_id' => '7',//合肥
            'agreement' => '坐席费_华康_元保_合肥_1568',
            'type' => '1',//坐席费：1 系统费：2
            'price' => '1568',
            'rule' => '1',//峰值人力：1 固定费用：2
            ],[
            'intermediary_id' => '2',//华康
            'settle_intermediary_id' => '2',
            'partner_id' => '2',//元保
            'city_id' => '8',//苏州
            'agreement' => '坐席费_华康_元保_苏州_1568',
            'type' => '1',//坐席费：1 系统费：2
            'price' => '1568',
            'rule' => '1',//峰值人力：1 固定费用：2
            ],[
            'intermediary_id' => '2',//华康
            'settle_intermediary_id' => '2',
            'partner_id' => '2',//元保
            'city_id' => '4',//济南
            'agreement' => '坐席费_华康_元保_济南_1500',
            'type' => '1',//坐席费：1 系统费：2
            'price' => '1500',
            'rule' => '1',//峰值人力：1 固定费用：2
            ],[
            'intermediary_id' => '2',//华康
            'settle_intermediary_id' => '2',
            'partner_id' => '4',//众安
            'city_id' => '8',//苏州
            'agreement' => '坐席费_华康_众安_苏州_1568',
            'type' => '1',//坐席费：1 系统费：2
            'price' => '1568',
            'rule' => '1',//峰值人力：1 固定费用：2
            ],[
            'intermediary_id' => '2',//华康
            'settle_intermediary_id' => '2',
            'partner_id' => '4',//众安
            'city_id' => '4',//济南
            'agreement' => '坐席费_华康_众安_济南_1500',
            'type' => '1',//坐席费：1 系统费：2
            'price' => '1500',
            'rule' => '1',//峰值人力：1 固定费用：2
            ],[
            'intermediary_id' => '2',//华康
            'settle_intermediary_id' => '2',
            'partner_id' => '5',//i云保
            'city_id' => '8',//苏州
            'agreement' => '坐席费_华康_i云保_苏州_1568',
            'type' => '1',//坐席费：1 系统费：2
            'price' => '1568',
            'rule' => '1',//峰值人力：1 固定费用：2
            ],[
            'intermediary_id' => '2',//华康
            'settle_intermediary_id' => '2',
            'partner_id' => '6',//星火保
            'city_id' => '8',//苏州
            'agreement' => '坐席费_华康_星火保_苏州_1568',
            'type' => '1',//坐席费：1 系统费：2
            'price' => '1568',
            'rule' => '1',//峰值人力：1 固定费用：2
            ],[
            'intermediary_id' => '2',//华康
            'settle_intermediary_id' => '2',
            'partner_id' => '6',//星火保
            'city_id' => '7',//合肥
            'agreement' => '坐席费_华康_星火保_合肥_1568',
            'type' => '1',//坐席费：1 系统费：2
            'price' => '1568',
            'rule' => '1',//峰值人力：1 固定费用：2
            ],[
            'intermediary_id' => '2',//华康
            'settle_intermediary_id' => '2',
            'partner_id' => '8',//质检
            'city_id' => '8',//苏州
            'agreement' => '坐席费_华康_质检_苏州_1568',
            'type' => '1',//坐席费：1 系统费：2
            'price' => '1568',
            'rule' => '1',//峰值人力：1 固定费用：2
            ],[
            'intermediary_id' => '3',//凯森
            'settle_intermediary_id' => '3',
            'partner_id' => '1',//水滴
            'city_id' => '1',//成都
            'agreement' => '坐席费_凯森_水滴_成都_40000',
            'type' => '1',//坐席费：1 系统费：2
            'price' => '40000',
            'rule' => '2',//峰值人力：1 固定费用：2
            ],[
            'intermediary_id' => '3',//凯森
            'settle_intermediary_id' => '3',
            'partner_id' => '3',//轻松筹
            'city_id' => '8',//苏州
            'agreement' => '坐席费_凯森_轻松筹_苏州_1568',
            'type' => '1',//坐席费：1 系统费：2
            'price' => '1568',
            'rule' => '1',//峰值人力：1 固定费用：2
            ],[
            'intermediary_id' => '4',//白鸽宝
            'settle_intermediary_id' => '4',
            'partner_id' => '2',//元保
            'city_id' => '3',//武汉
            'agreement' => '坐席费_白鸽宝_元保_武汉_1568',
            'type' => '1',//坐席费：1 系统费：2
            'price' => '1568',
            'rule' => '1',//峰值人力：1 固定费用：2
            ],[
            'intermediary_id' => '4',//白鸽宝
            'settle_intermediary_id' => '4',
            'partner_id' => '4',//众安
            'city_id' => '3',//武汉
            'agreement' => '坐席费_白鸽宝_众安_武汉_1568',
            'type' => '1',//坐席费：1 系统费：2
            'price' => '1568',
            'rule' => '1',//峰值人力：1 固定费用：2
            ],[
            'intermediary_id' => '4',//白鸽宝
            'settle_intermediary_id' => '4',
            'partner_id' => '7',//自建
            'city_id' => '3',//武汉
            'agreement' => '坐席费_白鸽宝_自建_武汉_1568',
            'type' => '1',//坐席费：1 系统费：2
            'price' => '1568',
            'rule' => '1',//峰值人力：1 固定费用：2
            ],[
            'intermediary_id' => '4',//白鸽宝
            'settle_intermediary_id' => '4',
            'partner_id' => '8',//质检
            'city_id' => '3',//武汉
            'agreement' => '坐席费_白鸽宝_质检_武汉_1568',
            'type' => '1',//坐席费：1 系统费：2
            'price' => '1568',
            'rule' => '1',//峰值人力：1 固定费用：2
            ],[
            'intermediary_id' => '4',//白鸽宝
            'settle_intermediary_id' => '4',
            'partner_id' => '9',//续服
            'city_id' => '3',//武汉
            'agreement' => '坐席费_白鸽宝_续服_武汉_1568',
            'type' => '1',//坐席费：1 系统费：2
            'price' => '1568',
            'rule' => '1',//峰值人力：1 固定费用：2
            ],
        ]);
    }
}
