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
			$table->increments('id');
			$table->ipAddress('ipv4')->unique();
			$table->string('room_id', 50)->index();
			$table->string('host', 50);
			$table->char('mac', 12);
			$table->integer('order')->default(0);
			$table->text('memo')->nullable();
			$table->unsignedInteger('user_id');
			$table->timestamps();

			$table->foreign('user_id')
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
