<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   
 
     public function index()
    {
        $articles_db = DB::table('articles')->get();

        return view('home' , ['articles' => $articles_db]);
    }
}
