<?php

/**
 * Global helpers file with misc functions.
 */
if (!function_exists('app_name')) {
    /**
     * Helper to grab the application name.
     *
     * @return mixed
     */
    function app_name()
    {
        return config('app.name');
    }
}

if (!function_exists('access')) {
    /**
     * Access (lol) the Access:: facade as a simple function.
     */
    function access()
    {
        return app('access');
    }
}

if (!function_exists('javascript')) {
    /**
     * Access the javascript helper.
     */
    function javascript()
    {
        return app('JavaScript');
    }
}

if (!function_exists('gravatar')) {
    /**
     * Access the gravatar helper.
     */
    function gravatar()
    {
        return app('gravatar');
    }
}

if (!function_exists('googleCurrency')) {
    /**
     * Return the converted value of a given currency and value.
     *
     * @param $from
     * @param $to
     * @param $amount
     *
     * @return int
     *
     * @internal param $currency
     * @internal param $exchangeIn
     */
    function googleCurrency($from, $to, $amount)
    {
        $url = "http://www.google.com/finance/converter?a=$amount&from=$from&to=$to";
        $request = curl_init();
        $timeOut = 0;
        curl_setopt($request, CURLOPT_URL, $url);
        curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($request, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)');
        curl_setopt($request, CURLOPT_CONNECTTIMEOUT, $timeOut);
        $response = curl_exec($request);
        curl_close($request);
        $regularExpression = '#\<span class=bld\>(.+?)\<\/span\>#s';
        preg_match($regularExpression, $response, $finalData);
        if (isset($finalData[   0])) {
            return $finalData[0];
        } else {
            return 'Currency conversion is not available now ';
        }
    }
}
