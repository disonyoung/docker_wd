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
    {//表名是 坐席费——人力峰值列表
        Schema::create('zuoxf_renlbs', function (Blueprint $table) {
            $table->id();
            $table->string('settledate')->comment('结算年月 2023年1月1日')->nullable();
            $table->string('item')->comment('项目名字')->nullable();
            $table->integer('renlb_id')->comment('人力表关联id')->nullable()->default(0);
            $table->integer('zuoxf_id')->comment('坐席费表关联id')->nullable()->default(0);
            $table->integer('xieyi_id')->comment('协议表关联id')->nullable()->default(0);
            $table->string('sales_id')->comment('销售坐席id：举例L20043')->nullable();
            $table->string('name')->comment('姓名')->nullable();
            $table->string('job')->comment('职位')->nullable();
            $table->string('status')->comment('状态：在职；离职')->nullable();
            $table->string('train_date')->comment('参训日期')->nullable();
            $table->string('entry_date')->comment('入职日期')->nullable();
            $table->string('depart_date')->comment('离职日期')->nullable();
            $table->string('online_date')->comment('上线日期')->nullable();
            $table->string('position')->comment('岗位职别：销售岗、管理岗、服务岗、大运营')->nullable();
            $table->string('intermediary')->comment('中介：恒丰、华康、凯森、白鸽宝')->default(0);
            $table->string('settle_intermediary')->comment('结算中介：恒丰、华康、凯森、白鸽宝')->default(0);
            $table->integer('intermediary_id')->comment('中介id：1恒丰、2华康、3凯森、4白鸽宝')->default(0);
            $table->integer('settle_intermediary_id')->comment('结算中介id：1恒丰、2华康、3凯森、4白鸽宝')->default(0);
            $table->string('partner')->comment('阵营：水滴、元保、轻松筹、众安')->nullable()->default(0);
            $table->integer('partner_id')->comment('阵营id：1水滴、2元保、3轻松筹、4众安')->nullable()->default(0);
            $table->string('city')->comment('城市：上海、苏州、成都、武汉、济南、合肥、西安')->nullable()->default(0);
            $table->integer('city_id')->comment('城市id：1济南、2合肥、3苏州、4西安、5上海、6成都、7武汉')->nullable()->default(0);
            $table->tinyInteger('is_paid')->default(0)->comment('是否支付：1是支付；0是未支付');
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
        Schema::dropIfExists('zuoxf_renlbs');
    }
};
