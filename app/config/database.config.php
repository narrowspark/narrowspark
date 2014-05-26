<?php

$config = array(
    'db.options' => array(
        'dsn'      => 'mysql:host='.getenv('DB_HOST').';dbname='.getenv('DB_DATABASE_NAME'),
        'username' => getenv('DB_DATABASE_USER'),
        'password' => getenv('DB_DATABASE_PASSWORD'),
        'frozen'   => getenv('DB_DATABASE_FROZEN'),
    )
);
