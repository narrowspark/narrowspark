<?php

/*
|--------------------------------------------------------------------------
| Load Environment Variables
|--------------------------------------------------------------------------
|
| Next we will load the environment variables for the application which
| are stored in the ".env" file. These variables will be loaded into
| the $_ENV and "putenv" facilities of PHP so they stay available.
|
*/

if (file_exists(__DIR__.'/../.env')) {
    \Dotenv::load(__DIR__.'/../');

    \Dotenv::required('APPLICATION_ENV');
}
