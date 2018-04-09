<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MgtController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if ($_SERVER['REMOTE_ADDR'] != getenv('APP_ALLOWED_IP')) {
            abort(404);
        }
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mgt');
    }
}
