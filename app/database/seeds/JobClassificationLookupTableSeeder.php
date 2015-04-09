<?php
/**
 * Created by PhpStorm.
 * User: mutaz.hameed
 * Date: 4/4/2015
 * Time: 5:29 PM
 */
use Faker\Factory as Faker;

class JobClassificationLookupTableSeeder extends Seeder{
    public function run()
    {
        $faker = Faker::create();


            JobCalssificationsLookup::create([
                'name' => 'Junior level'
            ]);
            JobCalssificationsLookup::create([
                'name' => 'Senior level'
            ]);

    }
} 