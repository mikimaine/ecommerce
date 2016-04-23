<?php

return [

    'listeners' =>[
        'Innovate\Listeners\EmailNotifier',
        'Innovate\Listeners\SmsNotifier',
        'Innovate\Listeners\FacebookNotifier',
    ],
    'upload_path' => base_path(env('APP_UPLOAD_PATH','public'.DS.'app'.DS.'innovate'))
];