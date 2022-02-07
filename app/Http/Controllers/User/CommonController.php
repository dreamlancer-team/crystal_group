<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class CommonController extends Controller
{
    /**
     * Display a about resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.welcome');
    }
}
