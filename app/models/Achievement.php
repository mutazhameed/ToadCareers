<?php

class Achievement extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		 'name' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['user_id', 'name', 'date', 'url', 'description'];

    public function user(){
        return $this->belongsTo('User');
    }
}