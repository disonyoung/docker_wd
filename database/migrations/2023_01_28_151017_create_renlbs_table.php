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
        Schema::create('renlbs', function (Blueprint $table) {
            $table->id();
            $table->string('sales_id')->comment('销售坐席id：举例L20043');
            $table->string('name')->comment('姓名');
            $table->string('job')->comment('职位');
            $table->string('status')->comment('状态：在职；离职');
            $table->string('train_date')->comment('参训日期');
            $table->string('entry_date')->comment('入职日期');
            $table->string('depart_date')->comment('离职日期');
            $table->string('position')->comment('岗位职别：销售岗、管理岗、服务岗、大运营');
            $table->integer('intermediary_id')->comment('中介id：1恒丰、2华康、3凯森、4白鸽宝')->default(0);
            $table->integer('partner_id')->comment('阵营id：1水滴、2元保、3轻松筹、4众安')->nullable()->default(0);
            $table->integer('city_id')->comment('城市id：1济南、2合肥、3苏州、4西安、5上海、6成都、7武汉')->nullable()->default(0);
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
        Schema::dropIfExists('renlbs');
    }
};
