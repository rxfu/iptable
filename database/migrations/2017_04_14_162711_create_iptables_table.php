<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIptablesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('iptables', function (Blueprint $table) {
			$table->increments('id')->comment('IP序号');
			$table->ipAddress('ipv4')->unique()->comment('IP地址');
			$table->string('room_id', 50)->index()->comment('房间号');
			$table->string('campus_id', 50)->comment('校区');
			$table->string('host', 50)->comment('使用者');
			$table->char('mac', 12)->comment('MAC地址');
			$table->integer('order')->default(0)->comment('序号');
			$table->text('memo')->nullable()->comment('备注');
			$table->unsignedInteger('creator_id')->comment('创建者ID');
			$table->unsignedInteger('last_modifier_id')->comment('最后修改者ID');
			$table->timestamps();

			$table->foreign('creator_id')
				->references('id')
				->on('users');
			$table->foreign('last_modifier_id')
				->references('id')
				->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('iptables');
	}
}
