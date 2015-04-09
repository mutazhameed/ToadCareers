<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CertificatesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 2) as $index)
		{
			Certificate::create([
                'user_id' => 2,
                'name' => $faker->name(),
                'authority' => $faker->company(),
                'license_num' => rand(100,1000),
                'url' => $faker->url(),
                'date' => $faker->date()

			]);
		}
	}

}
