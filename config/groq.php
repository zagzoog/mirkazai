<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Groq API Key
    |--------------------------------------------------------------------------
    |
    | Here you may specify your Groq API Key. This will be used to authenticate
    | with the Groq API - you can find your API key on the Groq console,
    | at https://console.groq.com.
    */

    'api_key' => env('GROQ_API_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Request Timeout
    |--------------------------------------------------------------------------
    |
    | The timeout may be used to specify the maximum number of seconds to wait
    | for a response. By default, the client will time out after 30 seconds.
    */

    'request_timeout' => env('GROQ_REQUEST_TIMEOUT', 30),

    /*
    |--------------------------------------------------------------------------
    | Base URL
    |--------------------------------------------------------------------------
    |
    | The base URL for the Groq API. This should not need to be changed unless
    | you are using a custom endpoint.
    */

    'base_url' => env('GROQ_BASE_URL', 'https://api.groq.com/openai/v1'),
]; 