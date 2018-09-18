<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function __invoke($name, $nickname ){
      return "Bienvenido {$name}, tu apodo es {$nickname}";

    }
}
