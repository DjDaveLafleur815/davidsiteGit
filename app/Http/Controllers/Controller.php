<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * Controller de la page d'accueil
     */
    public function index()
    {
        return view('home');
    }
    /**
     * Contrôleur de la page "À Propos"
     */
    public function about()
    {
        return view('about');
    }
    /**
     * Contrôleur de la page "Portfolio"
     */
    public function portfolio()
    {
        return view('portfolio');
    }
}
