<?php

namespace App\Http\Controllers;

use App\Models\Atendimento;
use Illuminate\Http\Request;

class AtendimentosController extends Controller
{
    public function create(Request $request)
    {
        $atendimento = Atendimento::create([
            'texto' => $request->texto
        ]);

        return $atendimento;
    }
}
