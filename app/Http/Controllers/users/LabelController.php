<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;

class LabelController extends Controller
{
    public function index(){
        return view('users\label');
    }
}
