<?php
declare(strict_types=1);
namespace App\Http\Middleware;

use Viserio\Cookie\Middleware\EncryptedCookiesMiddleware as BaseCookiEncrypter;

class EncryptedCookiesMiddleware extends BaseCookiEncrypter
{
    /**
     * The names of the cookies that should not be encrypted.
     *
     * @var array
     */
    protected $except = [
    ];
}
