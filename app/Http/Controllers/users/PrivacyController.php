<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function index(){
        return view('users\privacy');
    }
}
