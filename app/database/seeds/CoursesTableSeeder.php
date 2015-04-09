<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CoursesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 2) as $index)
		{
			Course::create([
                'user_id' => 2,
                'name' => $faker->name(),
                'description' => $faker->sentence(),
                'date' => $faker->date()

			]);
		}
	}

}
