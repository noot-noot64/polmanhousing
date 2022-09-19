<?php

namespace App\Http\Controllers\users;

use App\Models\ConditionExtern;
use App\Models\ConditionFacade;
use App\Models\ConditionInstallation;
use App\Models\ConditionInterior;
use App\Models\Conditions;
use App\Models\ConditionSanitary;
use App\Models\ConditionSubstructure;
use App\Models\ConditionSuperstructure;
use App\Models\Externs;
use App\Models\Facades;
use App\Models\House;
use App\Models\Installations;
use App\Models\Interiors;
use App\Models\Sanitaries;
use App\Models\Substructures;
use App\Models\Superstructures;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function edit($house)
    {
        $current_house = House::all()->where('id', $house)->first();
        $houseExtern = ConditionExtern::all()->where('house_id', $current_house->id)->first();

        $houseInstallation = ConditionInstallation::all()->where('house_id', $current_house->id)->first();
        $houseFacade = ConditionFacade::all()->where('house_id', $current_house->id)->first();
        $houseInterior = ConditionInterior::all()->where('house_id', $current_house->id)->first();
        $houseSanitary = ConditionSanitary::all()->where('house_id', $current_house->id)->first();
        $houseSubstructure = ConditionSubstructure::all()->where('house_id', $current_house->id)->first();
        $houseSuperstructure = ConditionSuperstructure::all()->where('house_id', $current_house->id)->first();
        $conditions = Conditions::all();
        $externs = Externs::all();
        $facades = Facades::all();
        $interiors = Interiors::all();
        $installations = Installations::all();
        $sanitaries = Sanitaries::all();
        $substructures = Substructures::all();
        $superstructures = Superstructures::all();

        return view('admin/housing/edit')->with([
            'house' => $current_house,
            'house_extern' => $houseExtern,
            'house_installation' => $houseInstallation,
            'house_facade' => $houseFacade,
            'house_interior' => $houseInterior,
            'house_sanitary' => $houseSanitary,
            'house_substructure' => $houseSubstructure,
            'house_superstructure' => $houseSuperstructure,
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
    public function update(Request $request, $house)
    {

        $current_house = House::all()->where('id', $house)->first();
        $validated = $request->validate([
            'address' => ['required', 'string'],
            'city' => ['required', 'string'],
            'postalcode' => ['required', 'string', 'max:6'],
            'buildyear' => ['nullable', 'integer'],
            'surface' => ['nullable', 'integer'],
        ]);

        $current_house->update([
            'address' => ucfirst($validated['address']),
            'city' => ucfirst($validated['city']),
            'postalcode' => $validated['postalcode'],
            'buildyear' => $validated['buildyear'],
            'surface' => $validated['surface'],
        ]);
        return redirect()->back()->with(['message' => ['message' => 'Gebruiker succesvol bewerkt', 'type' => 'success']]);
    }
    public function destroy()
    {

    }
}
