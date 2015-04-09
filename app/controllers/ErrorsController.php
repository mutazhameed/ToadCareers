<?php
/**
 * Created by PhpStorm.
 * User: mutaz.hameed
 * Date: 4/8/2015
 * Time: 4:27 PM
 */

class ErrorsController extends \BaseController {

    /**
     * Display a listing of experiences
     *
     * @return Response
     */
    public function unauthorized()
    {
        return View::make('errors.unauthorized');
    }

} 