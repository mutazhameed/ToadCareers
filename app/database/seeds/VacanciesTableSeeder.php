<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class VacanciesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 3) as $index)
		{
			Vacancy::create([
                'title' => $faker->sentence(),
                'location' => $faker->city(),
                'open_date' => $faker->date(),
                'closing_date' => $faker->date(),
                'classification' => rand(1,10),
                'company_id' => rand(1,3),
                'cat_id' => rand(1,3),
                'salary' => rand(1000,5000),
                'summary' => $faker->realText(100),
                'description' => $faker->realText(300),
                'responsibilities' => $faker->realText(200),
                'qualifications_experience' => $faker->realText(100),
                'skills_knowledge' => $faker->realText(100),
                'posted_user' => 1,
                'closed' => rand(0,1),
                'date_closed' => $faker->date()
			]);
		}
	}

}