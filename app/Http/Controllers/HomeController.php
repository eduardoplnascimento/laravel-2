<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function hello()
    {
        return view('hello');
    }

    public function soma($num1, $num2)
    {
        // Verificação se variáveis são números
        if (!is_numeric($num1) || !is_numeric($num2)) {
            return abort(502, 'Não são números');
        }

        // Calcular soma
        $result = $num1 + $num2;

        // Retornar página para usuário
        return view('resultado', compact('result'));
    }

    public function sub($num1, $num2)
    {
        // Verificação se variáveis são números
        if (!is_numeric($num1) || !is_numeric($num2)) {
            return abort(502, 'Não são números');
        }

        // Calcular subtração
        $result = $num1 - $num2;

        // Retornar página para usuário
        return view('resultado', compact('result'));
    }
}
