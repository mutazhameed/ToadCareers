<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ProfilesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

			Profile::create([
                'user_id' => 2,
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'gender' => rand(1,2),
                'nationality' => rand(1,5),
                'residence' => rand(1,5),
                'married' => rand(1,2),
                'dob' => $faker->date(),
                'mobile' => $faker->phoneNumber(),
                'phone' => $faker->phoneNumber(),
                'address' => $faker->address(),
                'cv_file' => $faker->fileExtension(),
                'summary' => $faker->sentence()

			]);

	}

}