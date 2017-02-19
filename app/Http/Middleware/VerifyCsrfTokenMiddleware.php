<?php
declare(strict_types=1);
namespace App\Http\Middleware;

use Viserio\Component\Session\Middleware\VerifyCsrfTokenMiddleware as BaseVerifier;

class VerifyCsrfTokenMiddleware extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
    ];
}
