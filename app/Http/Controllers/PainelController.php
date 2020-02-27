<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PainelController extends Controller
{
    public function Painel()
    {
        return view('painel');
    }
}
