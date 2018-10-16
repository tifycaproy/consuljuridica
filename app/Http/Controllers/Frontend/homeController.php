<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class homeController extends Controller
{
    public function index(){

    	return view('Frontend.index');
    }

    public function servicios(){

    	return view('Frontend.servicios');
    }
}
