<?php

class LanguagesLookup extends \Eloquent {

    // Add your validation rules here
    public static $rules = [
        // 'title' => 'required'
    ];
    protected $table = 'languages_lookup';
    // Don't forget to fill this array
    protected $fillable = ['name'];

    public function language(){
        return $this->belongsTo('Language', 'id');
    }

}