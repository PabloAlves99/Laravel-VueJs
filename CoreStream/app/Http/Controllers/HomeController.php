<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Inertia\Inertia;

class HomeController extends Controller
{
    // Método para verificar se as rotas de login e registro existem
    protected function canLogin()
    {
        return Route::has('login');
    }

    protected function canRegister()
    {
        return Route::has('register');
    }

    // Método para retornar a versão do Laravel e PHP
    protected function getAppVersions()
    {
        return [
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ];
    }

    // Método principal que renderiza a view home
    public function index()
    {
        return Inertia::render('Home', array_merge([
            'canLogin' => $this->canLogin(),
            'canRegister' => $this->canRegister(),
        ], $this->getAppVersions()));
    }
}
