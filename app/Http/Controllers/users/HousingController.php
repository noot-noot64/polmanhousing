<?php

namespace App\Http\Controllers\users;

use App\Models\House;
use Illuminate\Http\Request;

class HousingController extends Controller
{
    //  Checks if user is logged in
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $house = House::all()->first()->conditions()->first();
        //dd($house);
        return view('admin\housing');
    }
}
