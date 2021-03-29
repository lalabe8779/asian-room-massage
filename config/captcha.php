<?php

return [
    'service' => 'Recaptcha', // options: Recaptcha / Hcaptcha
    'sitekey' => env('CAPTCHA_SITEKEY', ''),
    'secret' => env('CAPTCHA_SECRET', ''),
    'collections' => [],
    'forms' => ['booking', 'contact'],
    'user_registration' => false,
    'error_message' => 'Captcha failed.',
    'disclaimer' => '',
    'invisible' => true,
    'hide_badge' => true,
    'enable_api_routes' => false,
];
