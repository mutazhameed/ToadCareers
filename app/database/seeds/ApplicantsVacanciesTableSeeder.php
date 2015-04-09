<?php
/**
 * Created by PhpStorm.
 * User: mutaz.hameed
 * Date: 3/30/2015
 * Time: 3:44 PM
 */
use Faker\Factory as Faker;

class ApplicantsVacanciesTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

       /* foreach(range(1, 10) as $index)
        {
            ApplicantsVacancies::create([
                'applicant_id' => rand(1,10),
                'vacancy_id' => rand(1,5),
                'years_of_experience' => rand(1,6),
                'status' => rand(1,4)

            ]);
        } */
    }



}
