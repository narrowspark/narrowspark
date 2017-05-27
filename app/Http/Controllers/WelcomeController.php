<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use Psr\Http\Message\ResponseInterface;
use View;

class WelcomeController extends Controller
{
    /**
     * Show the application welcome screen to the user.
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function index(): ResponseInterface
    {
        return View::createResponseView('welcome');
    }
}
