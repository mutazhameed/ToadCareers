<?php
/**
 * Created by PhpStorm.
 * User: mutaz.hameed
 * Date: 3/27/2015
 * Time: 10:10 PM
 */
/*
class AdminAuthController extends \BaseController
{
    public function getlogin()
    {
        return View::make('admin.auth.login');
    }

    public function postlogin()
    {
        $data = Input::all();
        $validator = Validator::make($data, User::$auth_rules);
        if($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();

        }
        if(Auth::attempt(array('user_name' => Input::get('user_name'), 'password' =>Input::get('password'))))
        {
            return Redirect::intended('admin/vacancies')->with($data);
        }
        return Redirect::route('admin.login');

    }

    public function getlogout(){
        Auth::logout();
        return Redirect::route('admin.login');
    }

}
*/