<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Theme;

/**
 * Class DashboardController
 * @package App\Http\Controllers\Frontend
 */
class DashboardController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        //view('frontend.user.dashboard')
        return Theme::view('home')
            ->withUser(access()->user());
    }
}
