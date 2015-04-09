<?php
/**
 * Created by PhpStorm.
 * User: mutaz.hameed
 * Date: 3/27/2015
 * Time: 7:29 PM
 */


class CategoriesLookup extends \Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories_lookup';
    protected $primaryKey = 'id';
    public $timestamps = false;
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
}