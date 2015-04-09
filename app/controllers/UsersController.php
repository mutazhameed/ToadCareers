<?php
/**
 * Created by PhpStorm.
 * User: mutaz.hameed
 * Date: 3/28/2015
 * Time: 12:54 PM
 */

class UsersController extends \BaseController {

    public function index(){

    }
    public function store(){
        $exist = User::where('email', '=', Input::get('email'))->pluck('email');
        if($exist) {
           // echo User::where('email', '=', Input::get('email'))->pluck('email');

            return Redirect::back()->withErrors($exist.' Email already registered');
        }
        $validator = Validator::make($data = Input::all(), User::$registration_rules);

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $data['password'] = Hash::make($data['password']);
        $data['type'] = 0;
        $newuser = User::create($data);
        if($newuser)
        {
            $profile = Profile::create(array('user_id' => User::where('email', '=', Input::get('email'))->pluck('id') , 'first_name' => $data['first_name'], 'last_name' => $data['last_name']));

            if($profile)
            {
                Auth::login($newuser);
                return Redirect::route('profile');
            }

        }
        return Redirect::route('user.create')->withInput();

    }

    public function show(){
        return View::make('users.create');
    }


}