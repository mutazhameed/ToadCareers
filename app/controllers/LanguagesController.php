<?php

class LanguagesController extends \BaseController {

	/**
	 * Display a listing of languages
	 *
	 * @return Response
	 */
	public function index()
	{
        return Redirect::route('dashboard', '#languages');
	}

	/**
	 * Show the form for creating a new language
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('languages.create');
	}

	/**
	 * Store a newly created language in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Language::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
        $data['user_id'] = Auth::user()->id;
		Language::create($data);
        //echo $data['lang_id']." | ". $data['level'] . " | u ".$data['user_id'] = Auth::user()->id;
		return Redirect::route('dashboard', '#languages');
	}

	/**
	 * Display the specified language.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$language = Language::findOrFail($id);

		return View::make('languages.show', compact('language'));
	}

	/**
	 * Show the form for editing the specified language.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$language = Language::find($id);

		return View::make('languages.edit', compact('language'));
	}

	/**
	 * Update the specified language in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$language = Language::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Language::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$language->update($data);

		return Redirect::route('dashboard', '#languages');
	}

	/**
	 * Remove the specified language from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Language::destroy($id);

		return Redirect::route('dashboard', '#languages');
	}

}
