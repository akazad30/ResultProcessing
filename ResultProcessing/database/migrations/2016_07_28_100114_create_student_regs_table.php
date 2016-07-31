<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentRegsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_regs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('surName');
			$table->string('fullName');
			$table->string('email');
			$table->string('class');
			$table->string('session');
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
		Schema::drop('student_regs');
	}

}
