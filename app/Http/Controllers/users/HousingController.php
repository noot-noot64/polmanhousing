<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;

class HousingController extends Controller
{
    public function index(){
        return view('users\housing');
    }
}
