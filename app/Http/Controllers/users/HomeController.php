<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
}
