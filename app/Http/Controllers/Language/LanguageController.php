<?php

namespace App\Http\Controllers\Language;

use App\Http\Controllers\Controller;

/**
 * Class LanguageController.
 */
class LanguageController extends Controller
{
    public function languageRoute($lang)
    {
        session()->put('locale', $lang);

        return redirect()->back();
    }
}
