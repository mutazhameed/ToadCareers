<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

        $this->call('UsersTableSeeder');
        $this->call('ProfilesTableSeeder');
		$this->call('VacanciesTableSeeder');
        $this->call('CompaniesLookupTableSeeder');
        $this->call('CategoriesLookupTableSeeder');
        $this->call('CountriesLookupTableSeeder');
        $this->call('ApplicantsVacanciesTableSeeder');
        $this->call('EducationTableSeeder');
        $this->call('ExperiencesTableSeeder');
        $this->call('LanguagesLookupTableSeeder');
        $this->call('JobClassificationLookupTableSeeder');
        $this->call('AchievementsTableSeeder');
        $this->call('CertificatesTableSeeder');
        $this->call('CoursesTableSeeder');
        $this->call('SkillsTableSeeder');





    }

}
