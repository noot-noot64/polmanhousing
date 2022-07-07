<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;

class RenterController extends Controller
{
    //  Checks if user is logged in
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin\renters');
    }
}
