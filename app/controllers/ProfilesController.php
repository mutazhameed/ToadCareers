<?php

class ProfilesController extends \BaseController {

	/**
	 * Display a listing of profiles
	 *
	 * @return Response
	 */
    public function getIndex(){
        return Redirect::route('dashboard','#personal');
    }
    public function getDashboard(){
        $profile = Profile::where('user_id','=',Auth::user()->id)->get();
        return View::make('dashboard.index', compact('profile'));
    }

	public function index()
	{
        return Redirect::route('dashboard','#personal');
	}

	/**
	 * Show the form for creating a new profile
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('profiles.create');
	}

	/**
	 * Store a newly created profile in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Profile::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Profile::create($data);

		return Redirect::route('profiles.index');
	}

	/**
	 * Display the specified profile.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$profile = Profile::with('user')->find($id);

		return View::make('profiles.show', compact('profile'));
	}

	/**
	 * Show the form for editing the specified profile.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$profile = Profile::find($id);

		return View::make('profiles.edit', compact('profile'));
	}

	/**
	 * Update the specified profile in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        if(!(User::where('id', '=', Auth::user()->id)->pluck('email') == Input::get('email')))
        {
            User::where('id', '=', Auth::user()->id)->update(array('email' => Input::get('email')));
        }
        $profile = Profile::findOrFail($id);

        $validator = Validator::make($data = Input::all(), Profile::$rules);

        // uploading and saving resume name in db
        if(Input::hasFile('cv_file'))
        {
            if ($validator->fails()) {
                return Redirect::back()->withErrors($validator)->withInput();
            }
            print($profile->cv_file);

            if (Input::file('cv_file')) {
                $file = array('cv_file' => Input::file('cv_file'));
                // setting up rules
                $rules = array('cv_file' => 'required|max:10000|mimes:text,doc,docx,pdf',); //a required, max 10000kb, doc or docx file and for max size max:10000
                // doing the validation, passing post data, rules and the messages
                $validator = Validator::make($file, $rules);
                if ($validator->fails()) {
                    // send back to the page with the input data and errors
                    return Redirect::to('profile')->withInput()->withErrors($validator);
                } else {
                    // checking file is valid.
                    if (Input::file('cv_file')->isValid()) {
                        $destinationPath = 'uploads'; // upload path
                        $extension = Input::file('cv_file')->getClientOriginalExtension(); // getting image extension
                        $fileName = md5(Auth::user()->email . date('Y-m-d H:i:s')) . '.' . $extension; // renameing image
                        Input::file('cv_file')->move($destinationPath, $fileName); // uploading file to given path
                        // sending back with message
                        //Input::file('cv_file')->getClientOriginalName()=> $fileName;
                        // var_dump(Input::file('cv_file'));
                        //echo "ddd";
                        $data['cv_file'] = $fileName;
                    } else {
                        // sending back with error message.
                        return Redirect::to('profile.edit');
                    }

                }
            }

        }
        else
        {
            $data['cv_file'] = $profile->cv_file;
        }

        $profile->update($data);

		return Redirect::route('dashboard','#personal');
	}

	/**
	 * Remove the specified profile from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Profile::destroy($id);

		return Redirect::route('profiles.index');
	}

    public function getApplicationStatus(){
       //echo " asdasd";
       // $profile = Profile::where('user_id','=',Auth::user()->id)->get();
        //DB::table('asd')->where('')
        $applications = ApplicantsVacancies::where('applicant_id', '=', Auth::user()->id)->get();
        return View::make('applications.index', compact('applications'));
      //  return View::make('profiles.index', compact('profile'));
    }

    public function Search()
    {
        $q = Input::get('query');
        $vac = Input::get('vacancy');
        $data = [];
        if(Input::get('summary'))
        {

            $profiles[] = Profile::whereRaw(
                "MATCH(summary) AGAINST(? IN BOOLEAN MODE)",
                array($q)
            )->pluck('user_id');
            $data = array_merge($data, $profiles);
        }
        if(Input::get('education'))
        {
            $education[] = Education::whereRaw(
                "MATCH(school, major, activities_social, description) AGAINST(? IN BOOLEAN MODE)",
                array($q)
            )->pluck('user_id');
            $data = array_merge($data, $education);
        }
        if(Input::get('achievement'))
        {
            $achievements[] = Achievement::whereRaw(
                "MATCH(name, description) AGAINST(? IN BOOLEAN MODE)",
                array($q)
            )->pluck('user_id');
            $data = array_merge($data, $achievements);
        }
        if(Input::get('certifications'))
        {
            $certificates[] = Certificate::whereRaw(
                "MATCH(name, authority) AGAINST(? IN BOOLEAN MODE)",
                array($q)
            )->pluck('user_id');
            $data = array_merge($data, $certificates);
        }
        if(Input::get('courses'))
        {
            $courses[] = Course::whereRaw(
                "MATCH(name, description) AGAINST(? IN BOOLEAN MODE)",
                array($q)
            )->pluck('user_id');
            $data = array_merge($data, $courses);
        }
        if(Input::get('experience'))
        {
            $experiences[] = Experience::whereRaw(
                "MATCH(company, title, description) AGAINST(? IN BOOLEAN MODE)",
                array($q)
            )->pluck('user_id');
            $data = array_merge($data, $experiences);
        }
        if(Input::get('languages'))
        {
            $languages[] = LanguagesLookup::whereRaw(
                "MATCH(name) AGAINST(? IN BOOLEAN MODE)",
                array($q)
            )->pluck('user_id');
            $data = array_merge($data, $languages);
        }
        if(Input::get('skills'))
        {
            $skills[] = Skill::whereRaw(
                "MATCH(name) AGAINST(? IN BOOLEAN MODE)",
                array($q)
            )->pluck('user_id');
            $data = array_merge($data, $skills);
        }

        return View::make('admin.search.results', compact('data', 'q', 'vac'));
    }

    public function searchIndex(){
        return View::make('admin.search.index');
    }

    public function applicantIndex($id){
        $educations = Education::where('user_id', '=', $id)->get();
        $achievements = Achievement::where('user_id', '=', $id)->get();
        $certificates = Certificate::where('user_id', '=', $id)->get();
        $courses = Course::where('user_id', '=', $id)->get();
        $experiences = Experience::where('user_id', '=', $id)->get();
        $languages = Language::where('user_id', '=', $id)->get();
        $skills = Skill::where('user_id', '=', $id)->get();
        $interests = Categoryofinterest::where('user_id', '=', $id)->get();
        $profile = Profile::where('user_id', '=', $id)->get();
        return View::make('admin.search.applicant', compact('profile', 'interests', 'skills', 'languages', 'experiences', 'courses', 'certificates', 'achievements', 'educations'));
    }
}
