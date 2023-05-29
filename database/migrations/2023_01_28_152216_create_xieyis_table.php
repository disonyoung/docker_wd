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
        Schema::create('xieyis', function (Blueprint $table) {
            $table->id();
            $table->integer('intermediary_id')->comment('中介表的关联id');
            $table->integer('settle_intermediary_id')->comment('结算中介表的关联id');
            $table->integer('partner_id')->comment('阵营表的关联id');
            $table->integer('city_id')->comment('城市表的关联id');
            $table->string('agreement')->comment('协议名字')->nullable();
            $table->string('model')->comment('模式：电销、网销、电视购物')->nullable();
            $table->string('type')->comment('费用类型：坐席、系统');
            $table->string('price')->comment('单价');
            $table->string('rule')->comment('结算规则：1峰值人力、2固定费用');
            $table->string('agreement_date')->comment('协议到期日期')->nullable();
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
        Schema::dropIfExists('xieyis');
    }
};
