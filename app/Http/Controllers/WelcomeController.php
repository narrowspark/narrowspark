<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use View;

class WelcomeController extends Controller
{
    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        return View::createResponseView('welcome');
    }
}
