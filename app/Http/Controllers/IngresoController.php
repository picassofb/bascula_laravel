<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class IngresoController extends Controller
{
    public function getPesoBruto()
    {
        return view('actions.ingreso.peso_bruto');
    }
}