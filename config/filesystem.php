<?php
declare(strict_types=1);

return [
    'viserio' => [
        'filesystem' => [
            /*
            |--------------------------------------------------------------------------
            | Default Connection Name
            |--------------------------------------------------------------------------
            |
            | Here you may specify which of the connections below you wish to use as
            | your default connection for all work. Of course, you may use many
            | connections at once using the manager class.
            |
            */
            'default' => 'local',

            /*
            |--------------------------------------------------------------------------
            | Flysystem Connections
            |--------------------------------------------------------------------------
            |
            | Here are each of the connections setup for your application. Defaults have
            | been setup for each connections as an example of the required options.
            | You can of course have multiple connections per driver.
            |
            | Supported Drivers: "local", "ftp", "awss3", "rackspace", "azure", "dropbox v2",
            |                    "null", "replicate", "sftp", "webdav", "vfs", "zip"
            |
            */
            'connections' => [
                'awss3' => [
                    'driver'          => 'awss3',
                    'key'             => 'your-key',
                    'secret'          => 'your-secret',
                    'bucket'          => 'your-bucket',
                    'region'          => 'your-region',
                    'version'         => 'latest',
                    // 'bucket_endpoint' => false,
                    // 'calculate_md5'   => true,
                    // 'scheme'          => 'https',
                    // 'endpoint'        => 'your-url',
                    // 'prefix'          => 'your-prefix',
                    // 'visibility'      => 'public',
                    // 'pirate'          => false,
                    // 'eventable'       => true,
                    // 'cache'           => 'foo'
                ],
                'azure' => [
                    'driver'       => 'azure',
                    'account-name' => 'your-account-name',
                    'api-key'      => 'your-api-key',
                    'container'    => 'your-container',
                    // 'visibility'   => 'public',
                    // 'pirate'       => false,
                    // 'eventable'    => true,
                    // 'cache'        => 'foo'
                ],
                'dropbox' => [
                    'driver'     => 'dropbox',
                    'token'      => 'your-token',
                    'app'        => 'your-app',
                    // 'prefix'     => 'your-prefix',
                    // 'visibility' => 'public',
                    // 'pirate'     => false,
                    // 'eventable'  => true,
                    // 'cache'      => 'foo'
                ],
                'ftp' => [
                    'driver'     => 'ftp',
                    'host'       => 'ftp.example.com',
                    'port'       => 21,
                    'username'   => 'your-username',
                    'password'   => 'your-password',
                    // 'root'       => '/path/to/root',
                    // 'passive'    => true,
                    // 'ssl'        => true,
                    // 'timeout'    => 20,
                    // 'visibility' => 'public',
                    // 'pirate'     => false,
                    // 'eventable'  => true,
                    // 'cache'      => 'foo'
                ],
                'local' => [
                    'driver'     => 'local',
                    'path'       => __DIR__ . '/storage/files',
                    // 'visibility' => 'public',
                    // 'pirate'     => false,
                    // 'eventable'  => true,
                    // 'cache'      => 'foo'
                ],
                'null' => [
                    'driver'    => 'null',
                    // 'eventable' => true,
                    // 'cache'     => 'foo'
                ],
                'rackspace' => [
                    'driver'     => 'rackspace',
                    'endpoint'   => 'your-endpoint',
                    'region'     => 'your-region',
                    'username'   => 'your-username',
                    'apiKey'     => 'your-api-key',
                    'container'  => 'your-container',
                    // 'internal'   => false,
                    // 'visibility' => 'public',
                    // 'pirate'     => false,
                    // 'eventable'  => true,
                    // 'cache'      => 'foo'
                ],
                'replicate' => [
                    'driver'     => 'replicate',
                    'source'     => 'your-source-adapter',
                    'replica'    => 'your-replica-adapter',
                    // 'visibility' => 'public',
                    // 'pirate'     => false,
                    // 'eventable'  => true,
                    // 'cache'      => 'foo'
                ],
                'sftp' => [
                    'driver'     => 'sftp',
                    'host'       => 'sftp.example.com',
                    'port'       => 22,
                    'username'   => 'your-username',
                    'password'   => 'your-password',
                    // 'privateKey' => 'path/to/or/contents/of/privatekey',
                    // 'root'       => '/path/to/root',
                    // 'timeout'    => 20,
                    // 'visibility' => 'public',
                    // 'pirate'     => false,
                    // 'eventable'  => true,
                    // 'cache'      => 'foo'
                ],
                'webdav' => [
                    'driver'     => 'webdav',
                    'baseUri'    => 'http://example.org/dav/',
                    'userName'   => 'your-username',
                    'password'   => 'your-password',
                    // 'visibility' => 'public',
                    // 'pirate'     => false,
                    // 'eventable'  => true,
                    // 'cache'      => 'foo'
                ],
                'zip' => [
                    'driver'     => 'zip',
                    'path'       => __DIR__ . '/storage/files/files.zip',
                    // 'visibility' => 'public',
                    // 'pirate'     => false,
                    // 'eventable'  => true,
                    // 'cache'      => 'foo'
                ],
            ],

            /*
            |--------------------------------------------------------------------------
            | Flysystem Cache
            |--------------------------------------------------------------------------
            |
            | Here are each of the cache configurations setup for your application.
            | All supported Viserio Cache Driver can be used. You can of course have
            | multiple connections per driver as shown.
            |
            */
            'cache' => [
            ],
        ],
    ],
];
