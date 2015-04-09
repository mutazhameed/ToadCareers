<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVacanciesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vacancies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('location');
			$table->string('open_date');
			$table->string('closing_date');
			$table->integer('classification');
			$table->integer('company_id');
			$table->integer('cat_id');
			$table->string('salary');
			$table->text('summary');
			$table->text('description');
			$table->text('responsibilities');
			$table->text('qualifications_experience');
			$table->text('skills_knowledge');
			$table->integer('posted_user');
			$table->integer('closed');
			$table->string('date_closed');
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
		Schema::drop('vacancies');
	}

}
