<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::view("/home/{result?}", "calculatriceView")->name("home");

Route::post('/calculer', function (Request $request) {
    $number1 = $request->input('number1');
    $number2 = $request->input('number2');
    $operator = $request->input('operator');
    switch ($operator) {
        case '+':
            $result = $number1 + $number2;
            break;
        case '-':
            $result = $number1 - $number2;
            break;
        case '*':
            $result = $number1 * $number2;
            break; 
        case '/':
            $result = $number2 != 0 ? $number1 / $number2 : 'Division par zéro';
            break;
        default:
            $result = 'Opérateur invalide';
    }

    return redirect()->route('home', ['result' => $result]);
});











