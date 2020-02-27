<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtendimentoController extends Controller
{
    public function Atendimento()
    {
        return view('atendimento');
    }
}
