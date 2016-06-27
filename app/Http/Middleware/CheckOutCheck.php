<?php
/**
 * Created by Miki Maine Amdu.
 * For : INNOVATE E-COMMERCE
 * User: MIKI$
 * Date: 6/26/2016
 * Time: 6:58 PM
 */

namespace app\Http\Middleware;


use Cart;
use Closure;

class CheckOutCheck {
    /**
     * @var array
     */
    protected $languages = ['en', 'am'];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Cart::count() == 0){
            return redirect()->back()->with('flash_message', 'First Add product to the Cart to check out');
        }

        return $next($request);
    }
}