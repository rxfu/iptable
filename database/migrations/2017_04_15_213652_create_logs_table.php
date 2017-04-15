<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('logs', function (Blueprint $table) {
			$table->increments('id')->comment('日志ID');
			$table->unsignedInteger('user_id')->comment('用户ID');
			$table->string('operator', 10)->comment('操作名称');
			$table->text('content')->comment('操作内容');
			$table->timestamps();

			$table->foreign('user_id')
				->references('id')
				->on('users')
				->onUpdate('cascade')
				->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('logs');
	}
}
