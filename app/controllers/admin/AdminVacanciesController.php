<?php

class AdminVacanciesController extends \BaseController {

	/**
	 * Display a listing of vacancies
	 *
	 * @return Response
	 */
	public function index()
	{
		$vacancies = Vacancy::all();

		return View::make('admin.vacancies.index', compact('vacancies'));
	}

	/**
	 * Show the form for creating a new vacancy
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.vacancies.create');
	}

    public function updateapplicant()
    {

        $data = Input::all();
        if(Request::ajax())
        {
           // return $data['status'];

              $id = $data['appid'];
             $applicant = ApplicantsVacancies::where('id', '=', $id)->first();
            $applicant->status = $data['status'];
           $applicant->update();
           // return Input::get('status');
           // return  Response::json('dfdfdfdfdf');
            return  Response::json(true);

        }else
        {
            return   Response::json(array('fail' => true, 'data' => Input::post('status')));
        }


    }

	/**
	 * Store a newly created vacancy in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Vacancy::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$vac = Vacancy::create($data);

        $this->mailVacancy($data['title'], $data['cat_id'], $vac['id']);
		return Redirect::route('admin.vacancies.index');
	}

	/**
	 * Display the specified vacancy.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$vacancy = Vacancy::findOrFail($id);

		return View::make('admin.vacancies.show', compact('vacancy'));
	}

	/**
	 * Show the form for editing the specified vacancy.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$vacancy = Vacancy::find($id);

		return View::make('admin.vacancies.edit', compact('vacancy'));
	}

	/**
	 * Update the specified vacancy in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$vacancy = Vacancy::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Vacancy::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$vacancy->update($data);

		return Redirect::route('admin.vacancies.index');
	}

	/**
	 * Remove the specified vacancy from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Vacancy::destroy($id);

		return Redirect::route('admin.vacancies.index');
	}

    public function appindex($id)
    {
        $vacancies = Vacancy::where('id', '=', $id)->get();
        $applicants = ApplicantsVacancies::where('vacancy_id', '=', $id)->get();
        return View::make('admin.vacancies.applicants', compact('vacancies', 'applicants'));
    }

    public static function mailVacancy($title, $id, $vid)
    {
        $usersList = CategoryOfInterest::where('cat_id', '=', $id)->where('notifications', '=', 1)->get();

        foreach($usersList as $usersl)
        {
             $username = Profile::where('user_id', '=', $usersl->user_id)->pluck('first_name');
            $emialuser = User::where('id', '=', $usersl->user_id)->pluck('email');
            Mail::send('emails.notify', array('title' => $title, 'vid' => $vid, 'name' => $username), function($message) use ($username, $emialuser)
            {
                $message->to($emialuser, $username)->subject('New job');
            });

        }
    }

}
