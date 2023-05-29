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
        Schema::create('item_bynames', function (Blueprint $table) {
            $table->id();
            $table->string('item_byname')->comment('项目名称,举例华康上海水滴1中心');
            $table->string('item_id')->comment('项目关联ID')->nullable();;
            $table->string('xieyi_id')->comment('协议关联id')->nullable();
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
        Schema::dropIfExists('item_bynames');
    }
};
