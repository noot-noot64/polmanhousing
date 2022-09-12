<?php

namespace App\Http\Controllers\users;

use App\Models\ConditionInstallation;
use App\Models\Conditions;
use App\Models\House;
use App\Models\Installations;
use Illuminate\Http\Request;

class HousingController extends Controller
{
    //  Checks if user is logged in
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $housing = House::all();

        return view('admin/housing/housing')->with(['houses' => $housing]);
    }
    public function create(){

    }
    public function edit(){

    }
    public function destroy(){

    }
}
