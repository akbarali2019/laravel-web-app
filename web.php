<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {

    $pizzas = [
        ['type' => 'hawaiian', 'base' => 'cheesy crust'],
        ['type' => 'volcano', 'base' => 'garlic crust'],
        ['type' => 'vag supreme', 'base' => 'thin & crispy']
    ];
    return view('pizzas', ['pizzas' => $pizzas]);
});
