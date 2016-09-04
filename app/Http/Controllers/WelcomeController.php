<?php
declare(strict_types=1);
namespace App\Controllers;

class WelcomeController extends Controller
{
    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        return View::make('wellcome');
    }
}
