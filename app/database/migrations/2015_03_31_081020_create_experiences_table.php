<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExperiencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('experiences', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('company');
			$table->integer('location');
			$table->string('title');
			$table->string('start_date');
			$table->string('end_date');
			$table->text('description');
			$table->integer('current_job');
			$table->timestamps();
		});
        DB::statement('ALTER TABLE experiences ADD FULLTEXT search(company, title, description)');

	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('experiences');
	}

}
