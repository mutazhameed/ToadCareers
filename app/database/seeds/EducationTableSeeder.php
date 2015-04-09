<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class EducationTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 2) as $index)
		{
			Education::create([
                'user_id' => 2,
                'school' => $faker->company(),
                'entrance_date' => $faker->date(),
                'graduation_date' => $faker->date(),
                'country' => rand(1,5),
                'major' => $faker->domainWord(),
                'grade' => rand(1,4),
                'activities_social' => $faker->sentence(),
                'description' => $faker->sentence()

			]);
		}
	}

}