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
<<<<<<< HEAD
       Activity::log('User Arrived At the home page');
       return Theme::view('frontend.index');
=======
        javascript()->put([
            'test' => 'it works!',
        ]);

        return Theme::view('frontend.index');

        //return JsonResponse::create([$this->tax->getPaginated(config('access.users.default_per_page'))]);
>>>>>>> 61cca9260d75f322faff49975dedaaa23a4b4fd6
    }

    /**
     * @return \Illuminate\View\View
     */
    public function macros()
    {
        return view('frontend.macros');
    }
}
