<?php

namespace App\Http\Controllers\users;

use App\Models\House;
use Illuminate\Http\Request;

class HousingController extends Controller
{
    public function index(){
        $house = House::all()->first()->conditions()->first();
        //dd($house);
        return view('users\housing');
    }
}
