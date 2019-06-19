<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function saludar(){
    	$categories=\App\Category::paginate(1);
    	return view('saludos')->withCategories($categories);
    }
}
