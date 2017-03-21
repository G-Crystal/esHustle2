<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    */

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

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
    public function getHome()
    {
        return view('home');
    }

}
