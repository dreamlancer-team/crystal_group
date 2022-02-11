<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Slider;

class CommonController extends Controller
{
    /**
     * Display a about resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('user.welcome', compact('sliders'));
    }
}
