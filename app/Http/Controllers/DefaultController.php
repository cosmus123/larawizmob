<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DefaultController extends Controller
{
    public function index(){
        return view('base');
    }

    public function download(){

    	$pathToFile = public_path(). "/images/laravel.jpg";

    	return response()->download($pathToFile);

    }

}
