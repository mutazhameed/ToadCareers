<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent  implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;
    public static $auth_rules=[
        'email' => 'required|email',
        'password' => 'required',
    ];
    public  static $registration_rules =[
        'email' => 'required|email',
        'password' => 'required',
    ];

	/**
     *
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
    protected $fillable = ['email','password','type'];
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    public function vacancies(){
        return $this->hasMany('Vacancy');
    }

    public function Profile(){
        return $this->belongsTo('Profile');
    }
    public function education(){
        return $this->hasMany('Education', 'user_id');
    }

    public function experience(){
        return $this->hasMany('Experience', 'user_id');
    }

    public function achievement(){
        return $this->hasMany('Achievement', 'user_id');
    }

    public function certificate(){
        return $this->hasMany('Certificate', 'user_id');
    }
    public function course(){
        return $this->hasMany('Course', 'user_id');
    }
    public function language(){
        return $this->hasMany('Language', 'user_id');
    }
    public function skill(){
        return $this->hasMany('Skill', 'user_id');
    }


}
