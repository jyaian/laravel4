<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tests', function($table)
		{
			$table->increments('id');
			$table->integer('partner_id')->unsigned()->default(0);
			$table->tinyinteger('aproved_errors')->unsigned()->default(0);
			$table->datetime('lastup_datetime')->default('0000-00-00 00:00:00');
			$table->datetime('create_datetime')->default('0000-00-00 00:00:00');
			// $table->timestamps();
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
		Schema::drop("test");
	}

}
