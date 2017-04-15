<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('users', function (Blueprint $table) {
			$table->increments('id')->comment('用户ID');
			$table->string('username', 128)->unique()->comment('用户名');
			$table->string('email', 128)->unique()->nullable()->comment('电子邮箱');
			$table->string('name')->comment('姓名');
			$table->string('password')->comment('密码');
			$table->rememberToken();
			$table->softDeletes();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('users');
	}
}
