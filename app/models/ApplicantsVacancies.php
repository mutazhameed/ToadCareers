<?php
/**
 * Created by PhpStorm.
 * User: mutaz.hameed
 * Date: 3/30/2015
 * Time: 3:47 PM
 */
class ApplicantsVacancies extends \Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public static $rules = [
        // 'title' => 'required'
    ];
    protected $table = 'applicants_vacancies';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['applicant_id', 'vacancy_id', 'years_of_experience', 'status', 'created_at', 'updated_at'];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

    public static function getIfApplied($id){
        if(ApplicantsVacancies::where('applicant_id', '=', Auth::user()->id)->where('vacancy_id', '=', $id)->first())
            return true;
        else
            return false;
    }
}