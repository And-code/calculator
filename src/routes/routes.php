<?php

Route::get('calculator', function () {
   echo "Hello from the calculator package!";
});

Route::get('calculator/add/{a}/{b}', 'And1site2\Calculator\CalculatorController@add');
Route::get('calculator/add_view/{a}/{b}', 'And1site2\Calculator\CalculatorController@add_view');
Route::get('calculator/substract/{a}/{b}', 'And1site2\Calculator\CalculatorController@substract');
