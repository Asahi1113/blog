<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->comment = '管理员';

            $table->increments('id');

            $table->string('username', 100)->unique()->comment('用户名');

            $table->string('email', 100)->unique()->nullable()->comment('电子邮箱');

            $table->string('password', 255)->comment('密码');

            $table->rememberToken()->comment('记住密码的Token');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
