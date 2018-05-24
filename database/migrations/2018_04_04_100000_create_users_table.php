<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateUsersTable.
 */
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 60)->unique()->default('')->comment('登录名');
            $table->string('nickname', 50)->nullable()->commnet('昵称');
            $table->string('display_name', 255)->nullable()->comment('显示名称');
            $table->string('email')->unique()->comment('邮箱');
            $table->string('url', 100)->default('')->comment('网址');
            $table->string('group')->comment('用户组')->default('guest');
            $table->integer('status')->default(0)->comment('状态');
            $table->string('password');
            $table->boolean('allow_login')->default(true)->comment('允许登录');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
