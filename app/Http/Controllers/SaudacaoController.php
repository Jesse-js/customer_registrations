<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaudacaoController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(string $nome = 'Treinaweb')
    {
        return view('saudacao', ['nome' => $nome])
            ->with('sobrenome', 'Santos');
    }
}
