<?php

namespace App\Http\Controllers\Frontend;

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
        javascript()->put([
            'test' => 'it works!',
        ]);

        return Theme::view('frontend.index');

        //return JsonResponse::create([$this->tax->getPaginated(config('access.users.default_per_page'))]);
    }

    /**
     * @return \Illuminate\View\View
     */
    public function macros()
    {
        return view('frontend.macros');
    }
}
