<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEducationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('education', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('school');
			$table->string('entrance_date');
			$table->string('graduation_date');
			$table->integer('country');
			$table->string('major');
			$table->integer('grade');
			$table->string('activities_social');
			$table->string('description');
			$table->timestamps();
		});
        DB::statement('ALTER TABLE education ADD FULLTEXT search(school, major, activities_social, description)');

    }


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('education');
	}

}
