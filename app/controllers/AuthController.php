<?php
/**
 * Created by PhpStorm.
 * User: mutaz.hameed
 * Date: 3/29/2015
 * Time: 12:58 PM
 */

class AuthController extends \BaseController
{
    public function getlogin()
    {
        return View::make('auth.login');
    }

    public function postlogin()
    {
        $data = Input::all();
        $validator = Validator::make($data, User::$auth_rules);
        if($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();

        }
        if(Auth::attempt(array('email' => Input::get('email'), 'password' =>Input::get('password'))))
        {
            if(Auth::user()->type==1)
            {
                return Redirect::intended('admin')->with($data);
            }else
            {
                return Redirect::intended('/')->with($data);
            }
        }
        return Redirect::route('login');

    }

    public function getlogout(){
        Auth::logout();
        return Redirect::route('home');
    }

}