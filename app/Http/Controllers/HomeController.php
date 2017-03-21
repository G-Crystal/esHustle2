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
     * index.
     *
     * @return Response
     */
    public function index()
    {
        $this->view();
    }

    /**
     * Load Home page
     *
     * @return Response
     */
    public function view()
    {
        return view('home/view');
    }

}
