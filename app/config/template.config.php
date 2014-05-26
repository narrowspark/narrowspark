<?php

$config = array(
    'view.template.paths' => array(
        // packages
        'packages' => realpath(__DIR__.'../../../public/packages/'),
        //public
        'public' => realpath(__DIR__.'../../../public/themes/public/'),
        'admin' => realpath(__DIR__.'../../../public/themes/admin/'),
        'error' => realpath(__DIR__.'../../../public/themes/error/'),
        'login' => realpath(__DIR__.'../../../public/themes/login/'),
        'email' => realpath(__DIR__.'../../../public/themes/email/'),
        'maintenance' => realpath(__DIR__.'../../../public/themes/maintenance/'),
    ),
    'view.default.template.path' => realpath(__DIR__.'../../../public/themes'),
    'view.cache' => array('cache' => realpath(__DIR__.'../../../public/storage/themes/')),
    'view.asset' => realpath(__DIR__.'../../../public/assets')
);
