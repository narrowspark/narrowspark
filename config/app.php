<?php

return [
    'app' => [
        'timezone' => 'UTC',

        'aliases' => [
            'Bus'           => Viserio\Bus\Proxies\Bus::class,
            'Cache'         => Viserio\Cache\Proxies\Cache::class,
            'Config'        => Viserio\Config\Proxies\Config::class,
            'Connect'       => Viserio\Connect\Proxies\Connect::class,
            'Console'       => Viserio\Console\Proxies\Console::class,
            'Cookie'        => Viserio\Cookie\Proxies\Cookie::class,
            'RequestCookie' => Viserio\Cookie\Proxies\RequestCookie::class,
            'Crypt'         => Viserio\Encryption\Proxies\Crypt::class,
            'Events'        => Viserio\Events\Proxies\Events::class,
            'Files'         => Viserio\Filesystem\Proxies\Files::class,
            'Storage'       => Viserio\Filesystem\Proxies\Storage::class,
            'App'           => Viserio\Foundation\Proxies\App::class,
            'Password'      => Viserio\Hashing\Proxies\Password::class,
            'Log'           => Viserio\Log\Proxies\Log::class,
            'Mail'          => Viserio\Mail\Proxies\Mail::class,
            'Parser'        => Viserio\Parsers\Proxies\Parser::class,
            'Pipeline'      => Viserio\Pipeline\Proxies\Pipeline::class,
            'Queue'         => Viserio\Queue\Proxies\Queue::class,
            'Route'         => Viserio\Routing\Proxies\Route::class,
            'Session'       => Viserio\Session\Proxies\Session::class,
            'Lang'          => Viserio\Translation\Proxies\Lang::class,
            'View'          => Viserio\View\Proxies\View::class,
        ],
    ],
];
