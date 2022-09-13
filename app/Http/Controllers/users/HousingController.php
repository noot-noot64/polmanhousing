<?php

namespace App\Http\Controllers\users;

use App\Models\ConditionInstallation;
use App\Models\Conditions;
use App\Models\Externs;
use App\Models\Facades;
use App\Models\House;
use App\Models\Installations;
use App\Models\Interiors;
use App\Models\Sanitaries;
use App\Models\Substructures;
use App\Models\Superstructures;
use Illuminate\Http\Request;

class HousingController extends Controller
{
    //  Checks if user is logged in
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $housing = House::all();

        return view('admin/housing/housing')->with(['houses' => $housing]);
    }
    public function show()
    {

    }
    public function create()
    {

    }
    public function store()
    {

    }
    public function edit(House $house)
    {
        $conditions = Conditions::all();
        $externs = Externs::all();
        $facades = Facades::all();
        $interiors = Interiors::all();
        $installations = Installations::all();
        $sanitaries = Sanitaries::all();
        $substructures = Substructures::all();
        $superstructures = Superstructures::all();

        return view('admin/housing/edit')->with([
            'house' => $house,
            'conditions' => $conditions,
            'externs' => $externs,
            'facades' => $facades,
            'interiors' => $interiors,
            'installations' => $installations,
            'sanitaries' => $sanitaries,
            'substructures' => $substructures,
            'superstructures' => $superstructures
            ]);
    }
    public function update()
    {

    }
    public function destroy()
    {

    }
}
