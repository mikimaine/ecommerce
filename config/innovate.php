<?php

return [

    'listeners' =>[
        'Innovate\Listeners\EmailNotifier',
        'Innovate\Listeners\SmsNotifier',
        'Innovate\Listeners\FacebookNotifier',
    ],
    'upload_path' => storage_path(env('APP_UPLOAD_PATH','app/innovate/'))
];