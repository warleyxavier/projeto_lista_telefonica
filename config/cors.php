<?php

/*$origin = [
    'http://localhost:9090',
    'http://localhost:3000',
    'chrome-extension://fhbjgbiflinjbdggehcddcbncdddomop',
    'https://falconsl.com.br',
    'https://dev.falconsl.com.br'
];*/

return [
    /*
     |--------------------------------------------------------------------------
     | Laravel CORS
     |--------------------------------------------------------------------------
     |
     | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
     | to accept any value.
     |
     */
    'supportsCredentials' => false,
    'allowedOrigins' => ['*'],
    'allowedHeaders' => ['*'],
    'allowedMethods' => ['*'],
    'exposedHeaders' => [],
    'maxAge' => 0,
];