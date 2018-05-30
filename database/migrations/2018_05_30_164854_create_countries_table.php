<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->comment = '国家列表';
            $table->char('code', 2)->comment('代码')->primary();
            $table->integer('area_code')->comment('手机区号');
            $table->string('name_en')->comment('名称（英文）');
            $table->string('name_zh-CN')->comment('名称（简体中文）');
            $table->string('name_zh-HK')->comment('名称（繁体中文）');
            $table->string('language')->default('')->comment('语言');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
