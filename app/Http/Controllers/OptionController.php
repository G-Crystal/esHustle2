<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class OptionController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Option Controller
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
     * Load Option AA
     *
     * @return Response
     */
    public function view()
    {
        return view('option/view');
    }

}
