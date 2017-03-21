<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Profile Controller
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
     * Load Account Profile
     *
     * @return Response
     */
    public function view()
    {
        return view('account/view');
    }

}
