<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AboutController extends Controller
{
    public function index(){
        return view('users\about');
    }
}
