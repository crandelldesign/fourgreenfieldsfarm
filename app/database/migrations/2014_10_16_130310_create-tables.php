<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
		{
			$table->timestamps();
			$table->increments('id');
			$table->string('username')->unique();;
			$table->string('password');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('email');
			$table->boolean('is_admin');
			$table->rememberToken();
		});

		Schema::create('calendar_events', function($table)
		{
			$table->timestamps();
			$table->increments('id');
			$table->string('name');
			$table->string('slug');
			$table->dateTime('starts_at');
            $table->dateTime('ends_at');
            $table->string('haunted_by')->nullable();
            $table->text('description')->nullable();
            $table->integer('old_id')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
		Schema::drop('calendar_events');
	}

}
