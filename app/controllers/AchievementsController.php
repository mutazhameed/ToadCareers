<?php

class AchievementsController extends \BaseController {

	/**
	 * Display a listing of achievements
	 *
	 * @return Response
	 */
	public function index()
	{
        return Redirect::route('dashboard', '#achievements');
	}

	/**
	 * Show the form for creating a new achievement
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('achievements.create');
	}

	/**
	 * Store a newly created achievement in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        //echo 'dfsdfsdsdfsd';
		$validator = Validator::make($data = Input::all(), Achievement::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

        $data['user_id'] = Auth::user()->id;
		Achievement::create($data);
       // echo 'dsds'. Auth::user()->id;
		return Redirect::route('dashboard', '#achievements');
	}

	/**
	 * Display the specified achievement.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$achievement = Achievement::findOrFail($id);

		return View::make('achievements.show', compact('achievement'));
	}

	/**
	 * Show the form for editing the specified achievement.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$achievement = Achievement::find($id);

		return View::make('achievements.edit', compact('achievement'));
	}

	/**
	 * Update the specified achievement in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$achievement = Achievement::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Achievement::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$achievement->update($data);

		return Redirect::route('dashboard', '#achievements');
	}

	/**
	 * Remove the specified achievement from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Achievement::destroy($id);

		return Redirect::route('dashboard', '#achievements');
	}

}
