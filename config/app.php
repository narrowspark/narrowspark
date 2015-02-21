<?php

/**
 * Narrowspark - a PHP 5 framework.
 *
 * @author      Daniel Bannert <info@anolilab.de>
 * @copyright   2014 Daniel Bannert
 *
 * @link        http://www.narrowspark.de
 *
 * @license     http://www.narrowspark.com/license
 *
 * @version     0.9.4-dev
 */

use Brainwave\Support\Helper as H;

/*
 * App config
 *
 * @package Narrowspark/narrowspark
 * @author  Daniel Bannert
 * @since   0.8.0-dev
 *
 */
return [

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => H::env('APP_DEBUG', true),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    | Supported: "development", "testing", "production"
    |
    */

    'mode' =>  H::env('APP_MODE', 'development'),

    /*
    |--------------------------------------------------------------------------
    | Application Maintenance
    |--------------------------------------------------------------------------
    |
    |
    */

    'maintenance ' => false,

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Cerebro command line tool. You should set this to the root of
    | your application so that it is used when running Cerebro tasks.
    |
    */

    'url' => 'http://localhost',

    /*
    |--------------------------------------------------------------------------
    | Application Exception handler
    |--------------------------------------------------------------------------
    |
    | Supported: "whoops", "plain"
    |
    */

    'exception.handler' => 'whoops',

    /*
    |--------------------------------------------------------------------------
    | Logging Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log settings for your application. Out of
    | the box, Narrowspark uses the Monolog PHP logging library. This gives
    | you a variety of powerful log handlers / formatters to utilize.
    |
    | Available Settings: "single", "daily", "syslog", "errorlog"
    |
    */

    'log' => 'daily',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |
    */

    'locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Application Charset
    |--------------------------------------------------------------------------
    |
    |
    |
    |
    */

    'charset' => 'UTF-8',

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale to use when the current one
    | is not available. You may change the value to correspond to any of
    | the language folders that are provided through your application.
    |
    */

    'fallback.locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Application Language
    |--------------------------------------------------------------------------
    |
    |
    |
    |
    */

    'language.files' => [],

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Brainwave encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    | Note: You can find a random 32-character key her:
    | www.narrowspark.de/encryption-key-generator
    |
    */

    'crypt.key' => H::env('APP_KEY', 'SomeRandomString'),

    /*
    |--------------------------------------------------------------------------
    | Encryption Cipher
    |--------------------------------------------------------------------------
    |
    |
    |
    |
    */

    'crypt.cipher' => MCRYPT_RIJNDAEL_256,

    /*
    |--------------------------------------------------------------------------
    | Encryption Mode
    |--------------------------------------------------------------------------
    |
    |
    |
    |
    */

    'crypt.mode' => 'ctr',
];
