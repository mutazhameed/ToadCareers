<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
        $data = array(
            array('id'=> 1, 'email'=>'admin@localhost.com', 'password' => Hash::make('demo'), 'type' => 1),
            array('id'=> 2, 'email'=>'user@demo.com', 'password' => Hash::make('demo'), 'type' => 10)
        );
			User::create($data);
	}

}