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
        $houseExtern = ConditionExtern::all()->where('house_id', $current_house->id);
        $houseInstallation = ConditionInstallation::all()->where('house_id', $current_house->id);
        $houseFacade = ConditionFacade::all()->where('house_id', $current_house->id);
        $houseInterior = ConditionInterior::all()->where('house_id', $current_house->id);
        $houseSanitary = ConditionSanitary::all()->where('house_id', $current_house->id);
        $houseSubstructure = ConditionSubstructure::all()->where('house_id', $current_house->id);
        $houseSuperstructure = ConditionSuperstructure::all()->where('house_id', $current_house->id);
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
//        dd($request);
        $current_house = House::all()->where('id', $house)->first();
        $validated = $request->validate([
            'address' => ['required', 'string'],
            'city' => ['required', 'string'],
            'postalcode' => ['required', 'string', 'max:6'],
            'buildyear' => ['nullable', 'integer'],
            'surface' => ['nullable', 'integer'],
            'accessible' => ['nullable', 'integer'],
            'condition' => ['required', 'integer'],
        ]);

        $current_house->update([
            'address' => ucfirst($validated['address']),
            'city' => ucfirst($validated['city']),
            'postalcode' => $validated['postalcode'],
            'buildyear' => $validated['buildyear'],
            'surface' => $validated['surface'],
            'accessible' => $validated['accessible'],
            'condition_id' => $validated['condition'],
        ]);

        $validated_externs = $request->validate([
            "externs-1" => ['required', 'integer'],
            "externs-2" => ['required', 'integer'],
            "externs-3" => ['required', 'integer'],
            "externs-4" => ['required', 'integer'],
            "externs-5" => ['required', 'integer'],
            "externs-6" => ['required', 'integer'],
            "externs-7" => ['required', 'integer'],
            "externs-8" => ['required', 'integer'],
            "externs-9" => ['required', 'integer'],
        ]);
        $validated_extern_comments = $request->validate([
            "extern-comment-1" => ['nullable', 'string'],
            "extern-comment-2" => ['nullable', 'string'],
            "extern-comment-3" => ['nullable', 'string'],
            "extern-comment-4" => ['nullable', 'string'],
            "extern-comment-5" => ['nullable', 'string'],
            "extern-comment-6" => ['nullable', 'string'],
            "extern-comment-7" => ['nullable', 'string'],
            "extern-comment-8" => ['nullable', 'string'],
            "extern-comment-9" => ['nullable', 'string'],
        ]);
        foreach($validated_externs as $extern_name => $condition_id) {
            foreach($validated_extern_comments as $extern_comment => $comment_value) {
//                dd($comment_value);
                $extern_id = substr($extern_name, -1);
                if (empty(ConditionExtern::all()->where('extern_id', $extern_id)->first())) {
                    ConditionExtern::create([
                        'extern_id' => $extern_id,
                        'house_id' => $house,
                        'condition_id' => $condition_id,
                        'comment' => $comment_value,
                    ]);
                } else {
                    ConditionExtern::where('extern_id', $extern_id)->update([
                        'condition_id' => $condition_id,
                        'comment' => $comment_value,
                    ]);
                }
            }
        }
        return redirect()->back()->with('success','Succesvol huis bewerkt');
    }
    public function destroy()
    {

    }
}
