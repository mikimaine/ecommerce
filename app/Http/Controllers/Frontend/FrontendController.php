<?php

namespace App\Http\Controllers\Frontend;

use Activity;
use App\Http\Controllers\Controller;
use Theme;

/**
 * Class FrontendController.
 */
class FrontendController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        Activity::log('User Arrived At the home page');

        return Theme::view('frontend.index');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function macros()
    {
        return view('frontend.macros');
    }
}
