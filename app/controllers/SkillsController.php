<?php

class SkillsController extends \BaseController {

	/**
	 * Display a listing of skills
	 *
	 * @return Response
	 */
	public function index()
	{
        return Redirect::route('dashboard', '#skills');
	}

	/**
	 * Show the form for creating a new skill
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('skills.create');
	}

	/**
	 * Store a newly created skill in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Skill::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
        $data['user_id'] = Auth::user()->id;
		Skill::create($data);

		return Redirect::route('dashboard', '#skills');
	}

	/**
	 * Display the specified skill.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$skill = Skill::findOrFail($id);

		return View::make('skills.show', compact('skill'));
	}

	/**
	 * Show the form for editing the specified skill.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$skill = Skill::find($id);

		return View::make('skills.edit', compact('skill'));
	}

	/**
	 * Update the specified skill in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$skill = Skill::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Skill::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$skill->update($data);

		return Redirect::route('dashboard', '#skills');
	}

	/**
	 * Remove the specified skill from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Skill::destroy($id);

		return Redirect::route('dashboard', '#skills');
	}

}
