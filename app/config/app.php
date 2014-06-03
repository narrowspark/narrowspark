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
$config = array(

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

    'debug' => false,

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
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Brainwave encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

    'crypt.key' => 'YourSecretKey!!!',

    'crypt.cipher' => MCRYPT_RIJNDAEL_256,

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'app.providers' => array(
        '\Brainwave\Crypt\CryptServiceProvider' => array(),
        '\Brainwave\Session\SessionServiceProvider' => array(),
        '\Brainwave\Flash\FlashServiceProvider' => array(),
        '\Brainwave\Support\Translator\TranslatorServiceProvider' => array(),
        '\Brainwave\Event\EventServiceProvider' => array(),
        '\Brainwave\Cache\CacheServiceProvider' => array(),
        '\Brainwave\Support\Autoloader\AutoloaderServiceProvider' => array()
    ),

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'app.aliases' => array(
        'App'           => '\Brainwave\Support\Facades\App',
        'Log'           => '\Brainwave\Support\Facades\Log',
        'Mail'          => '\Brainwave\Support\Facades\Mail',
        'View'          => '\Brainwave\Support\Facades\View',
        'Event'         => '\Brainwave\Support\Facades\Event',
        'Route'         => '\Brainwave\Support\Facades\Route',
        'Config'        => '\Brainwave\Support\Facades\Config',
        'Request'       => '\Brainwave\Support\Facades\Request',
        'Resource'      => '\Brainwave\Support\Facades\Resource',
        'Response'      => '\Brainwave\Support\Facades\Response',
        'Services'      => '\Brainwave\Support\Facades\Services',
        'Autoloader'    => '\Brainwave\Support\Facades\Autoloader',
    ),

);
