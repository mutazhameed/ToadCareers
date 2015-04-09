<?php
Route::group(array('before' =>'auth'), function() {
    Route::resource('vacancies', 'VacanciesController');
    Route::resource('profiles', 'ProfilesController');
    Route::resource('education', 'EducationController');
    Route::resource('experiences', 'ExperiencesController');
    Route::resource('achievements', 'AchievementsController');
    Route::resource('courses', 'CoursesController');
    Route::resource('languages', 'LanguagesController');
    Route::resource('skills', 'SkillsController');
    Route::resource('certificates', 'CertificatesController');
    Route::resource('interests', 'CategoryOfInterestsController');

});
Route::resource('user', 'UsersController');

Route::get('login', array('as' => 'login', 'uses' => 'AuthController@getlogin'));
Route::post('login', array('as' => 'login.post', 'uses' => 'AuthController@postlogin'));
Route::get('logout', array('as' => 'logout', 'uses' => 'AuthController@getlogout'));
Route::get('user/register', array('as' => 'user.create', 'uses' => 'UsersController@index'));
Route::get('/', array('as' => 'home', 'uses' => 'VacanciesController@getIndex'));
Route::get('vacancies', array('as' => 'home', 'uses' => 'VacanciesController@getIndex'));
Route::get('vacancy/{id}', array('as' => 'vacancy', 'uses' => 'VacanciesController@getVacancy'))->where('id', '[1-9][0-9]*');
Route::post('vacancy/{id}', array('as' => 'vacancy.apply', 'uses' => 'VacanciesController@apply'));

//user Profile
Route::group(array('before' =>'auth'), function() {
    Route::get('profile', array('as' => 'profile', 'uses' => 'ProfilesController@getIndex'));
    Route::get('profiles', array('as' => 'profile', 'uses' => 'ProfilesController@getIndex'));
//for applicant to apply
//education
    Route::get('education', array('as' => 'education', 'uses' => 'EducationController@index'));
//Route::get('education/{id}', array('as' =>'education', 'uses' =>'EducationController@getPost'))->where('id', '[1-9][0-9]*');
//Experience
    Route::get('experiences', array('as' => 'experiences', 'uses' => 'ExperiencesController@index'));
    Route::get('achievements', array('as' => 'achievements', 'uses' => 'AchievementsController@index'));
    Route::get('courses', array('as' => 'courses', 'uses' => 'CoursesController@index'));
    Route::get('languages', array('as' => 'languages', 'uses' => 'LanguagesController@index'));
    Route::get('skills', array('as' => 'skills', 'uses' => 'SkillsController@index'));
    Route::get('certificates', array('as' => 'certificates', 'uses' => 'CertificatesController@index'));
    Route::get('applications', array('as' => 'applications', 'uses' => 'ProfilesController@getApplicationStatus'));

    Route::get('dashboard', array('as' => 'dashboard', 'uses' => 'ProfilesController@getDashboard'));

});
//admin links
//Route::get('admin', array('as' => 'admin', 'uses' => 'AdminVacanciesController@index'));

//admin
Route::group(array('prefix' => 'admin', 'before' =>'auth|admin' ), function(){
    Route::get('/', array('as' => 'admin', 'uses' => 'AdminVacanciesController@index'));

    Route::resource('vacancies', 'AdminVacanciesController');
    Route::get('vacancies', array('as' => 'vacancies','uses' => 'AdminVacanciesController@index'));
    Route::post('vacancies/applicants/{id}', array('as' => 'vacancies.applicant','uses' => 'AdminVacanciesController@updateapplicant'));

    Route::get('vacancies/applicants/{id}', array('as' => 'vacancies.applicants','uses' => 'AdminVacanciesController@appindex'));
//    Route::get('vacancy/{id}', array('as' => 'vacancy', 'uses' => 'VacanciesController@getVacancy'))->where('id', '[1-9][0-9]*');
    Route::post('results', array('as' => 'search.results', 'uses' => 'ProfilesController@Search'));
    Route::get('search', array('as' => 'search', 'uses' => 'ProfilesController@searchIndex'));
//    Route::get('results', array('as' => 'search.index', 'uses' => 'ProfilesController@searchIndex'));
    Route::get('results', array('as' => 'search.results', 'uses' => 'ProfilesController@Search'));
    Route::get('applicant/{id}', array('as' => 'search.applicant', 'uses' => 'ProfilesController@applicantIndex'));

});
Route::controller('user.password', 'RemindersController');

Route::get('user/password/remind', array('uses' => 'RemindersController@getRemind', 'as' => 'password.remind'));
Route::post('user/password/remind', array('uses' => 'RemindersController@postRemind', 'as' => 'password.request'));
Route::get('user/password/reset/{token}', array('uses' => 'RemindersController@getReset', 'as' => 'password.reset'));
Route::post('user/password/reset/{token}', array('uses' => 'RemindersController@postReset', 'as' => 'password.update'));


//errors
Route::get('unauthorized', array('uses' => 'ErrorsController@unauthorized', 'as' => 'errors.unauthorized'));


App::missing(function($exception)
{
    return Response::view('errors.missing', array(), 404);
});