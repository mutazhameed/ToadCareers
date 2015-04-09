<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ExperiencesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 2) as $index)
		{
			Experience::create([
                'user_id' => 2,
                'company' => $faker->company(),
                'location' => rand(1,5),
                'title' => $faker->word(),
                'start_date' => $faker->date(),
                'end_date' => $faker->date(),
                'description' => $faker->sentence(),
                'current_job' => rand(0,1)

			]);
		}
	}

}