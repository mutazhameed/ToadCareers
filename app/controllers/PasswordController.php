<?php
/**
 * Created by PhpStorm.
 * User: mutaz.hameed
 * Date: 4/4/2015
 * Time: 10:06 AM
 */

class PasswordController extends \BaseController {

    public function remind()
    {
        return View::make('users.password.remind');
    }

    public function request()
    {
        $credentials = array('email' => Input::get('email'), 'password' => Input::get('password'));
        return Password::remind($credentials);
    }

    public function reset($token)
    {
        return View::make('users.password.reset')->with('token', $token);
    }

    public function update()
    {
        $credentials = array('email' => Input::get('email'), 'password' => Input::get('password'), 'password_confirmation' => Input::get('password_confirmation'), 'token' => Input::get('token'));
        return Password::reset($credentials, function($user, $password)
        {
            $user->password = Hash::make($password);

            $user->save();

            return Redirect::to('login')->with('flash', 'Your password has been reset');
        });
    }
} 