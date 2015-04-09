<?php

class EducationController extends \BaseController {

	/**
	 * Display a listing of education
	 *
	 * @return Response
	 */
	public function index()
	{
        return Redirect::route('dashboard', '#education');
	}

	/**
	 * Show the form for creating a new education
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('education.create');
	}

	/**
	 * Store a newly created education in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Education::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
        $data['user_id'] = Auth::user()->id;
		Education::create($data);

		return Redirect::route('dashboard', '#education');
	}

	/**
	 * Display the specified education.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$education = Education::findOrFail($id);

		return View::make('education.show', compact('education'));
	}

	/**
	 * Show the form for editing the specified education.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$education = Education::find($id);

		return View::make('education.edit', compact('education'));
	}

	/**
	 * Update the specified education in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$education = Education::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Education::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$education->update($data);

		return Redirect::route('dashboard', '#education');
	}

	/**
	 * Remove the specified education from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Education::destroy($id);

		return Redirect::route('dashboard', '#education');
	}

}
