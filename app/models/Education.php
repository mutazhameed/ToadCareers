<?php

class Education extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['user_id', 'school', 'entrance_date', 'graduation_date', 'country', 'major', 'grade', 'activities_social', 'description'];


    public function user(){
        return $this->belongsTo('User', 'id');
    }
}
