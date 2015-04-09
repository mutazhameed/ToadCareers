<?php

class CertificatesController extends \BaseController {

	/**
	 * Display a listing of certificates
	 *
	 * @return Response
	 */
	public function index()
	{
        return Redirect::route('dashboard', '#certificates');
	}

	/**
	 * Show the form for creating a new certificate
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('certificates.create');
	}

	/**
	 * Store a newly created certificate in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Certificate::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
        $data['user_id'] = Auth::user()->id;
		Certificate::create($data);

		return Redirect::route('dashboard', '#certificates');
	}

	/**
	 * Display the specified certificate.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$certificate = Certificate::findOrFail($id);

		return View::make('certificates.show', compact('certificate'));
	}

	/**
	 * Show the form for editing the specified certificate.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$certificate = Certificate::find($id);

		return View::make('certificates.edit', compact('certificate'));
	}

	/**
	 * Update the specified certificate in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$certificate = Certificate::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Certificate::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$certificate->update($data);

		return Redirect::route('dashboard', '#certificates');
	}

	/**
	 * Remove the specified certificate from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Certificate::destroy($id);

		return Redirect::route('dashboard', '#certificates');
	}

}
