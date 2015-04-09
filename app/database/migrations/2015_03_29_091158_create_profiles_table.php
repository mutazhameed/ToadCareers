<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('user_id');
			$table->string('first_name');
			$table->string('last_name');
			$table->integer('gender');
			$table->integer('nationality');
			$table->integer('residence');
			$table->integer('married');
			$table->string('dob');
			$table->string('mobile');
			$table->string('phone');
			$table->string('address');
			$table->string('cv_file');
            $table->text('summary');
			$table->timestamps();
		});
        DB::statement('ALTER TABLE profiles ADD FULLTEXT search(summary)');

    }


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('profiles', function($table) {
            $table->dropIndex('search');
        });

        Schema::drop('profiles');
	}

}
