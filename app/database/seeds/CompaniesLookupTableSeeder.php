<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CompaniesLookupTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 5) as $index)
		{
			CompaniesLookup::create([
                'name' => $faker->company(),
                'url' => $faker->url()

			]);
		}
	}

}