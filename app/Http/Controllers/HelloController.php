<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
    $irada='hello from controller';

   return view ('subviews/hello',compact('irada'));


    }
    public function about()
    {

        return view('about');

    }
   

}
