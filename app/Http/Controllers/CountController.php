<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountController extends Controller
{
    public function show(){

        $show = \App\Models\Count::first()->amount;
        return view('show', ['show' => $show]);
               
    }
}