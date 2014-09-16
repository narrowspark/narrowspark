<?php
/**
 * Narrowspark - a PHP 5 framework
 *
 * @author      Daniel Bannert <info@anolilab.de>
 * @copyright   2014 Daniel Bannert
 * @link        http://www.narrowspark.de
 * @license     http://www.narrowspark.com/license
 * @version     0.8.0-dev
 * @package     Narrowspark/framework
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Narrowspark is an open source PHP 5 framework, based on the Slim framework.
 *
 */

/**
 * App config
 *
 * @package Narrowspark/narrowspark
 * @author  Daniel Bannert
 * @since   0.8.0-dev
 *
 */
return array(

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

    'debug' => true,

    /*
    |--------------------------------------------------------------------------
    | Application Maintenance
    |--------------------------------------------------------------------------
    |
    |
    */

    'app.maintenance ' => false,

    /*
    |--------------------------------------------------------------------------
    | HTTPS Only
    |--------------------------------------------------------------------------
    |
    | By setting this option to true, the application will only work if
    | the server has a HTTPS connection.
    |
    */

    'https' => false,

    /*
    |--------------------------------------------------------------------------
    | HTTP Version
    |--------------------------------------------------------------------------
    |
    | Change the http version of the application.
    |
    */

    'http.version' => '1.1',

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

    'app.mode' => 'development',

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

    'app.locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Application Charset
    |--------------------------------------------------------------------------
    |
    |
    |
    |
    */

    'app.charset' => 'UTF-8',

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

    'app.fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Application Charset
    |--------------------------------------------------------------------------
    |
    |
    |
    |
    */

    'app.language.files' => array(),

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Brainwave encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    | Note: You can find a random 32-character key her : www.narrowspark.de/encryption-key-generator
    |
    */

    'crypt.key' => 'YourSecretKey!!!',

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

    /*
    |--------------------------------------------------------------------------
    | Json
    |--------------------------------------------------------------------------
    |
    |
    |
    |
    */

    'json.option' => '0',

    /*
    |--------------------------------------------------------------------------
    | Routes Escape
    |--------------------------------------------------------------------------
    |
    | Escape special chars on route marching
    | example as /v2.1/ matches /v2.1/, /v2a1/, /v2b1/ and so on...
    |
    */

    'route.escape' => false,

    /*
    |--------------------------------------------------------------------------
    | Routes Case Sensitive
    |--------------------------------------------------------------------------
    |
    |
    |
    |
    */

    'route.case_sensitive' => true,

    /*
    |--------------------------------------------------------------------------
    | Routes Contex
    |--------------------------------------------------------------------------
    |
    |
    |
    |
    */

    'route.context' => null,

    /*
    |--------------------------------------------------------------------------
    | Routes Class
    |--------------------------------------------------------------------------
    |
    |
    |
    |
    */

    'route.class' => '\Brainwave\Routing\Route',

    /*
    |--------------------------------------------------------------------------
    | Callable Resolver
    |--------------------------------------------------------------------------
    |
    |
    |
    |
    */

   'callable.resolver' => 'CallableResolver',

);
