<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('rooms', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name', 50)->unique();
			$table->text('description')->nullable();
			$table->unsignedInteger('campus_id');

			$table->foreign('campus_id')
				->references('id')
				->on('campuses')
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
		Schema::dropIfExists('rooms');
	}
}
