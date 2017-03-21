<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MobileController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Mobile Controller
    |--------------------------------------------------------------------------
    */

    /**
     * index
     *
     * @return Response
     */
    public function index()
    {
        $this->view();
    }

    /**
     * Load Mobile App
     *
     * @return Response
     */
    public function view()
    {
        return view('mobile/view');
    }

}
