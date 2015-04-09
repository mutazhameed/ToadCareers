<?php

class Skill extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['user_id', 'name', 'level'];

    public function user(){
        return $this->belongsTo('User', 'id');
    }

}