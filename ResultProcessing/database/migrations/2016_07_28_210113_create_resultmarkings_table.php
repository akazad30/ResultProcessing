<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultmarkingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resultmarkings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('class');
			$table->string('subject');
			$table->string('session');
			$table->string('fullName');
			$table->string('test1');
			$table->string('test2');
			$table->string('test3');
			$table->string('exam');
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
		Schema::drop('resultmarkings');
	}

}
