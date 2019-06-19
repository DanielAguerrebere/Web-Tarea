<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Category;

class CategoriesController extends Controller
{
    public function index(){
    	$categories=\App\Category::all();
    	return view('Categories.index')->withCategories($categories);
    }
    
}
