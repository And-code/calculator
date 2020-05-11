<?php

namespace And1site2\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    //
    public function add($a, $b){
        echo $a + $b;
    }

    public function substract($a, $b){
        echo $a - $b;
    }

    // rout with view
    public function add_view($a, $b){
        $result = $a + $b;
        $compact = compact('result');
        return view('calculator::add', $compact);
    }
}
