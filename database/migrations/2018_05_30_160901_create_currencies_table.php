<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->comment = '货币列表';
            $table->char('code', 3)->comment('代码')->primary();
            $table->string('name_en')->comment('名称（英文）');
            $table->string('name_zh-CN')->comment('名称（简体中文）');
            $table->string('name_zh-HK')->comment('名称（繁体中文）');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('currencies');
    }
}
