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
        Schema::create('expenditures', function (Blueprint $table) {
            $table->id();
            $table->string('date')->comment('月份,举例2023-3-1');
            $table->string('category')->comment('类别口径,举例营销费用');
            $table->string('Major_subject')->comment('科目大项,举例C项费用');
            $table->string('Secondary_subject')->comment('科目大项,举例竞赛费用');
            $table->string('item_id')->comment('项目关联id')->nullable();
            $table->string('item_name')->comment('项目名称');
            $table->string('city_id')->comment('城市关联id')->nullable();
            $table->string('partner_id')->comment('阵营关联id')->nullable();
            $table->string('cost')->comment('费用金额')->default('0')->nullable();
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
        Schema::dropIfExists('expenditures');
    }
};
