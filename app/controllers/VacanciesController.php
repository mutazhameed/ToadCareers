<?php
/**
 * Created by PhpStorm.
 * User: mutaz.hameed
 * Date: 3/28/2015
 * Time: 12:54 PM
 */

class VacanciesController extends \BaseController {


    public function getIndex(){
        $this->checkForClosingDate();
        $vacancies = Vacancy::where('closed', '=', 0)->with('user')->get();
        return View::make('vacancies.index', compact('vacancies'));
    }

    public function getVacancy($id){
        $vacancy = Vacancy::with('user')->find($id);
        return View::make('vacancies.vacancy', compact('vacancy'));

    }

    public function apply($id){
        //echo "k".$id." |e: ".Input::get('years_of_experience')." | user_id: ".Auth::user()->id;
        $validator = Validator::make($data = Input::all(), ApplicantsVacancies::$rules);
        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        $data['vacancy_id'] =$id;
        $data['applicant_id'] =Auth::user()->id;
        $data['status'] = 0;
        ApplicantsVacancies::create($data);
        return Redirect::back();
    }

    public function checkForClosingDate()
    {
        $vacancies = Vacancy::where('closing_date', '<=', date('Y-m-d'))->get();
        if($vacancies)
        {
            foreach($vacancies as $vac)
            {
                $closedVac = Vacancy::find($vac->id);
                $closedVac->closed = 1;
                $closedVac->date_closed = date('Y-m-d');
                $closedVac->save();
            }
        }
    }

}