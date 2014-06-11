<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('boards', function($table)
		{
			$table->increments('id');
			$table->integer('category_id')->unsigned()->default(0);
			$table->string('user_name', 32)->default('');
			$table->text('comment')->default('');
			$table->datetime('lastup_datetime')->default('0000-00-00 00:00:00');
			$table->datetime('create_datetime')->default('0000-00-00 00:00:00');
			$table->tinyinteger('disable')->unsigned()->default(0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('boards');
	}

}
