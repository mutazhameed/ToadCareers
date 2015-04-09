<?php
/**
 * Created by PhpStorm.
 * User: mutaz.hameed
 * Date: 4/4/2015
 * Time: 5:20 PM
 */

class JobCalssificationsLookup extends \Eloquent {
    protected $fillable = ['name'];

    protected $table = 'job_classification_lookup';
    protected $primaryKey = 'id';
    public $timestamps = false;
} 