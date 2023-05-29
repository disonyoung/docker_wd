<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zuoxfs', function (Blueprint $table) {//表名是 坐席费
            $table->id();
            $table->string('settledate')->comment('结算年月 2023年1月1日');
            $table->string('item')->comment('项目名称')->nullable();
            $table->string('intermediary_id')->comment('中介表的关联id,中介：恒丰、华康、凯森、白鸽宝')->nullable();
            $table->string('intermediary')->comment('中介表的关联id,中介：恒丰、华康、凯森、白鸽宝')->nullable();
            $table->string('city_id')->comment('城市表的关联id,城市：上海、苏州、成都、武汉、济南、合肥、西安')->nullable();
            $table->string('city')->comment('城市表的关联id,城市：上海、苏州、成都、武汉、济南、合肥、西安')->nullable();
            $table->string('partner_id')->comment('阵营表的关联id，水滴、元保、轻松筹、众安')->nullable();
            $table->string('partner')->comment('阵营表的关联id，水滴、元保、轻松筹、众安')->nullable();
            $table->string('settle_intermediary_id')->comment('结算公司，中介：恒丰、华康、凯森、白鸽宝')->nullable();
            $table->string('settle_intermediary')->comment('结算公司，中介：恒丰、华康、凯森、白鸽宝')->nullable();
            $table->string('sales')->comment('销售职-冗余数据-添加峰值坐席人力时生成')->nullable();
            $table->string('managers')->comment('管理职-冗余数据-添加峰值坐席人力时生成')->nullable();
            $table->string('services')->comment('服务职-冗余数据-添加峰值坐席人力时生成')->nullable();
            $table->string('rear_services')->comment('大运营-冗余数据-添加峰值坐席人力时生成')->nullable();
            $table->string('manpower')->comment('总人力-冗余数据-添加峰值坐席人力时生成')->nullable();
            $table->string('xieyi_id')->comment('协议表的关联id')->nullable();
            $table->string('price')->comment('协议表的单价')->nullable();
            $table->string('amount')->comment('总计坐席费')->nullable();
            $table->string('payment_date')->comment('支付日期')->nullable();
            $table->string('cost_no')->comment('费控单号')->nullable();
            $table->tinyInteger('is_del')->default(0)->comment('删除标记：1是正常；0是删除');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zuoxfs');
    }
};
