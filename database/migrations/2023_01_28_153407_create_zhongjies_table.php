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
        Schema::create('zhongjies', function (Blueprint $table) {//中介公司
            $table->id();
            $table->string('name')->comment('中介名字');
            $table->string('type')->comment('中介类别:经纪、代理');
            $table->string('contact')->comment('联系人名字');
            $table->string('email')->comment('联系人email')->nullable();
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
        Schema::dropIfExists('zhongjies');
    }
};
