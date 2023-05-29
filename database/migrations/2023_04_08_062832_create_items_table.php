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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('项目名称,举例苏州水滴');
            $table->string('byname')->comment('项目名称,举例华康苏州水滴中心');
            $table->string('xieyi_id')->comment('协议关联id')->nullable();
            $table->string('city_id')->comment('城市关联id')->nullable();
            $table->string('partner_id')->comment('阵营关联id')->nullable();
            $table->string('intermediary_id')->comment('协议中介：恒丰、华康、凯森、白鸽宝')->default(0);
            $table->string('settle_intermediary_id')->comment('结算中介：恒丰、华康、凯森、白鸽宝')->default(0);
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
        Schema::dropIfExists('items');
    }
};
