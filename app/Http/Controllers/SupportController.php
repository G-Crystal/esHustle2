<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class SupportController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Support Controller
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
     * Load Support
     *
     * @return Response
     */
    public function view()
    {
        return view('support/view');
    }

}
