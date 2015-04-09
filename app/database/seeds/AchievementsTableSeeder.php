<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class AchievementsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Achievement::create([
                'user_id' => 2,
                'name' => $faker->name(),
                'date' => $faker->date(),
                'url' => $faker->url(),
                'description' => $faker->sentence()

			]);
		}
	}

}
