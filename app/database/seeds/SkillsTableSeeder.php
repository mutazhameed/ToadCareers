<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SkillsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 2) as $index)
		{
			Skill::create([
                'user_id' => 2,
                'name' => $faker->name(),
                'level' => rand(1,3)

			]);
		}
	}

}
