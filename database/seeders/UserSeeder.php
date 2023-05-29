<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 添加用户测试数据
        DB::table('users')->insert([
            'name' => 'ydsysy',
            'email' => 'ydsysy@163.com',
            'password' => Hash::make('1234qwer'),
        ]);
    }
}
