<?php

class ExperiencesController extends \BaseController {

	/**
	 * Display a listing of experiences
	 *
	 * @return Response
	 */
	public function index()
	{
        return Redirect::route('dashboard', '#experience');
	}

	/**
	 * Show the form for creating a new experience
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('experiences.create');
	}

	/**
	 * Store a newly created experience in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Experience::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
        $data['user_id'] = Auth::user()->id;
		Experience::create($data);

		return Redirect::route('dashboard', '#experience');
	}

	/**
	 * Display the specified experience.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$experience = Experience::findOrFail($id);

		return View::make('experiences.show', compact('experience'));
	}

	/**
	 * Show the form for editing the specified experience.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$experience = Experience::find($id);

		return View::make('experiences.edit', compact('experience'));
	}

	/**
	 * Update the specified experience in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$experience = Experience::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Experience::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$experience->update($data);

		return Redirect::route('dashboard', '#experience');
	}

	/**
	 * Remove the specified experience from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Experience::destroy($id);

		return Redirect::route('dashboard', '#experience');
	}

}
