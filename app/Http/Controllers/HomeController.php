<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    */

    /**
     * Log the user out of the application.
     *
     * @return Response
     */
    public function index()
    {
        $this->getHome();
    }

    /**
     * Log the user out of the application.
     *
     * @return Response
     */
    public function home()
    {
        return view('home/home');
    }

}
