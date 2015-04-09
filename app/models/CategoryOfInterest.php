<?php

class CategoryOfInterest extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		 'cat_id' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = ['user_id', 'cat_id', 'notifications'];

}