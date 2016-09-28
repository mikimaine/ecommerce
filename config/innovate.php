<?php

return [

    /*
 *
 */
'listeners' => [
    'Innovate\Listeners\EmailNotifier',
    'Innovate\Listeners\SmsNotifier',
    'Innovate\Listeners\FacebookNotifier',
    'Innovate\Listeners\TwitterNotifier',
    'Innovate\Listeners\wkuLisener',
],
    'upload_path' => base_path(env('APP_UPLOAD_PAT', 'public'.DS.'app'.DS.'innovate')),
];
