<?php

class CategoryOfInterestsController extends \BaseController {

	/**
	 * Display a listing of categoryofinterests
	 *
	 * @return Response
	 */
	public function index()
	{
        return Redirect::route('dashboard', '#catOfInterest');
	}

	/**
	 * Show the form for creating a new categoryofinterest
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('interests.create');
	}

	/**
	 * Store a newly created categoryofinterest in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Categoryofinterest::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
        $data['user_id'] = Auth::user()->id;
		Categoryofinterest::create($data);

		return Redirect::route('dashboard', '#catOfInterest');
	}

	/**
	 * Display the specified categoryofinterest.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$interest = Categoryofinterest::findOrFail($id);

		return View::make('interests.show', compact('interest'));
	}

	/**
	 * Show the form for editing the specified categoryofinterest.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$interest = Categoryofinterest::find($id);

		return View::make('interests.edit', compact('interest'));
	}

	/**
	 * Update the specified categoryofinterest in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$categoryofinterest = Categoryofinterest::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Categoryofinterest::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
        $data['user_id'] = Auth::user()->id;
		$categoryofinterest->update($data);

		return Redirect::route('dashboard', '#catOfInterest');
	}

	/**
	 * Remove the specified categoryofinterest from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Categoryofinterest::destroy($id);

		return Redirect::route('dashboard', '#catOfInterest');
	}

}
