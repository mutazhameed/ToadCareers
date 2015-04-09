<?php

class Profile extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['user_id', 'first_name', 'last_name', 'gender', 'nationality', 'residence', 'married', 'dob', 'mobile', 'phone', 'address', 'summary', 'cv_file', 'career_objective' ];

    public function user(){
        return $this->belongsTo('User');
    }

    public static function getGender($id)
    {
        switch($id) {
            case 1:
                return 'Male';
            case 2:
                return 'Female';
                break;
            default:
                return 'Unknown';
                break;
        }
    }

}