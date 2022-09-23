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

        //extern update en create
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
        foreach ($validated_externs as $extern_name => $condition_id) {

            $extern_id = substr($extern_name, -1);
            $comment_name =  'extern-comment-'. $extern_id;
            $comment = $validated_extern_comments[$comment_name];
            if (empty(ConditionExtern::all()->where('extern_id', $extern_id)->first())) {
                ConditionExtern::create([
                    'extern_id' => $extern_id,
                    'house_id' => $house,
                    'condition_id' => $condition_id,
                    'comment' => $comment,
                ]);
            } else {
                ConditionExtern::where('extern_id', $extern_id)->update([
                    'condition_id' => $condition_id,
                    'comment' => $comment,
                ]);
            }
        }

        //facade update en create
        $validated_facades = $request->validate([
            "facades-1" => ['required', 'integer'],
            "facades-2" => ['required', 'integer'],
            "facades-3" => ['required', 'integer'],
            "facades-4" => ['required', 'integer'],
            "facades-5" => ['required', 'integer'],
            "facades-6" => ['required', 'integer'],
            "facades-7" => ['required', 'integer'],
            "facades-8" => ['required', 'integer'],
            "facades-9" => ['required', 'integer'],
            "facades-10" => ['required', 'integer'],
            "facades-11" => ['required', 'integer'],
            "facades-12" => ['required', 'integer'],
            "facades-13" => ['required', 'integer'],
            "facades-14" => ['required', 'integer'],
            "facades-15" => ['required', 'integer'],
            "facades-16" => ['required', 'integer'],
            "facades-17" => ['required', 'integer'],
            "facades-18" => ['required', 'integer'],
            "facades-19" => ['required', 'integer'],
            "facades-20" => ['required', 'integer'],
            "facades-21" => ['required', 'integer'],
            "facades-22" => ['required', 'integer'],
            "facades-23" => ['required', 'integer'],
        ]);
        $validated_facade_comments = $request->validate([
            "facade-comment-1" => ['nullable', 'string'],
            "facade-comment-2" => ['nullable', 'string'],
            "facade-comment-3" => ['nullable', 'string'],
            "facade-comment-4" => ['nullable', 'string'],
            "facade-comment-5" => ['nullable', 'string'],
            "facade-comment-6" => ['nullable', 'string'],
            "facade-comment-7" => ['nullable', 'string'],
            "facade-comment-8" => ['nullable', 'string'],
            "facade-comment-9" => ['nullable', 'string'],
            "facade-comment-10" => ['nullable', 'string'],
            "facade-comment-11" => ['nullable', 'string'],
            "facade-comment-12" => ['nullable', 'string'],
            "facade-comment-13" => ['nullable', 'string'],
            "facade-comment-14" => ['nullable', 'string'],
            "facade-comment-15" => ['nullable', 'string'],
            "facade-comment-16" => ['nullable', 'string'],
            "facade-comment-17" => ['nullable', 'string'],
            "facade-comment-18" => ['nullable', 'string'],
            "facade-comment-19" => ['nullable', 'string'],
            "facade-comment-20" => ['nullable', 'string'],
            "facade-comment-21" => ['nullable', 'string'],
            "facade-comment-22" => ['nullable', 'string'],
            "facade-comment-23" => ['nullable', 'string'],
        ]);
        foreach ($validated_facades as $facade_name => $condition_id) {

            $facade_id = substr($facade_name, 8);

            $comment_name =  'facade-comment-'. $facade_id;
            $comment = $validated_facade_comments[$comment_name];
            if (empty(ConditionFacade::all()->where('facade_id', $facade_id)->first())) {
                ConditionFacade::create([
                    'facade_id' => $facade_id,
                    'house_id' => $house,
                    'condition_id' => $condition_id,
                    'comment' => $comment,
                ]);
            } else {
                ConditionFacade::where('facade_id', $facade_id)->update([
                    'condition_id' => $condition_id,
                    'comment' => $comment,
                ]);
            }
        }

        //installation update en create
        $validated_installations = $request->validate([
            "installations-1" => ['nullable', 'integer'],
            "installations-2" => ['nullable', 'integer'],
            "installations-3" => ['nullable', 'integer'],
            "installations-4" => ['nullable', 'integer'],
            "installations-5" => ['nullable', 'integer'],
            "installations-6" => ['nullable', 'integer'],
            "installations-7" => ['nullable', 'integer'],
            "installations-8" => ['nullable', 'integer'],
            "installations-9" => ['nullable', 'integer'],
            "installations-10" => ['nullable', 'integer'],
            "installations-11" => ['nullable', 'integer'],
            "installations-12" => ['nullable', 'integer'],
            "installations-13" => ['nullable', 'integer'],
            "installations-14" => ['nullable', 'integer'],
            "installations-15" => ['nullable', 'integer'],
        ]);
        $validated_installation_comments = $request->validate([
            "installation-comment-1" => ['nullable', 'string'],
            "installation-comment-2" => ['nullable', 'string'],
            "installation-comment-3" => ['nullable', 'string'],
            "installation-comment-4" => ['nullable', 'string'],
            "installation-comment-5" => ['nullable', 'string'],
            "installation-comment-6" => ['nullable', 'string'],
            "installation-comment-7" => ['nullable', 'string'],
            "installation-comment-8" => ['nullable', 'string'],
            "installation-comment-9" => ['nullable', 'string'],
            "installation-comment-10" => ['nullable', 'string'],
            "installation-comment-11" => ['nullable', 'string'],
            "installation-comment-12" => ['nullable', 'string'],
            "installation-comment-13" => ['nullable', 'string'],
            "installation-comment-14" => ['nullable', 'string'],
            "installation-comment-15" => ['nullable', 'string'],
        ]);
        foreach ($validated_installations as $installation_name => $condition_id) {

            $installation_id = substr($installation_name, 14);
            $comment_name =  'installation-comment-'. $installation_id;
            $comment = $validated_installation_comments[$comment_name];
            if (empty(ConditionInstallation::all()->where('installation_id', $installation_id)->first())) {
                ConditionInstallation::create([
                    'installation_id' => $installation_id,
                    'house_id' => $house,
                    'condition_id' => $condition_id,
                    'comment' => $comment,
                ]);
            } else {
                ConditionInstallation::where('installation_id', $installation_id)->update([
                    'condition_id' => $condition_id,
                    'comment' => $comment,
                ]);
            }
        }

        //interior update en create
        $validated_interiors = $request->validate([
            "interiors-1" => ['required', 'integer'],
            "interiors-2" => ['required', 'integer'],
            "interiors-3" => ['required', 'integer'],
            "interiors-4" => ['required', 'integer'],
            "interiors-5" => ['required', 'integer'],
            "interiors-6" => ['required', 'integer'],
            "interiors-7" => ['required', 'integer'],
            "interiors-8" => ['required', 'integer'],
        ]);
        $validated_interior_comments = $request->validate([
            "interior-comment-1" => ['nullable', 'string'],
            "interior-comment-2" => ['nullable', 'string'],
            "interior-comment-3" => ['nullable', 'string'],
            "interior-comment-4" => ['nullable', 'string'],
            "interior-comment-5" => ['nullable', 'string'],
            "interior-comment-6" => ['nullable', 'string'],
            "interior-comment-7" => ['nullable', 'string'],
            "interior-comment-8" => ['nullable', 'string'],
        ]);
        foreach ($validated_interiors as $interior_name => $condition_id) {

            $interior_id = substr($interior_name, 10);
            $comment_name =  'interior-comment-'. $interior_id;
            $comment = $validated_interior_comments[$comment_name];
            if (empty(ConditionInterior::all()->where('interior_id', $interior_id)->first())) {
                ConditionInterior::create([
                    'interior_id' => $interior_id,
                    'house_id' => $house,
                    'condition_id' => $condition_id,
                    'comment' => $comment,
                ]);
            } else {
                ConditionInterior::where('interior_id', $interior_id)->update([
                    'condition_id' => $condition_id,
                    'comment' => $comment,
                ]);
            }
        }

        //sanitary update en create
        $validated_sanitaries = $request->validate([
            "sanitaries-1" => ['required', 'integer'],
            "sanitaries-2" => ['required', 'integer'],
            "sanitaries-3" => ['required', 'integer'],
            "sanitaries-4" => ['required', 'integer'],
            "sanitaries-5" => ['required', 'integer'],
            "sanitaries-6" => ['required', 'integer'],
            "sanitaries-7" => ['required', 'integer'],
            "sanitaries-8" => ['required', 'integer'],
            "sanitaries-9" => ['required', 'integer'],
            "sanitaries-10" => ['required', 'integer'],
            "sanitaries-11" => ['required', 'integer'],
            "sanitaries-12" => ['required', 'integer'],
            "sanitaries-13" => ['required', 'integer'],
            "sanitaries-14" => ['required', 'integer'],
            "sanitaries-15" => ['required', 'integer'],
            "sanitaries-16" => ['required', 'integer'],
            "sanitaries-17" => ['required', 'integer'],
            "sanitaries-18" => ['required', 'integer'],
            "sanitaries-19" => ['required', 'integer'],
            "sanitaries-20" => ['required', 'integer'],
            "sanitaries-21" => ['required', 'integer'],
            "sanitaries-22" => ['required', 'integer'],
            "sanitaries-23" => ['required', 'integer'],
            "sanitaries-24" => ['required', 'integer'],
            "sanitaries-25" => ['required', 'integer'],
            "sanitaries-26" => ['required', 'integer'],
            "sanitaries-27" => ['required', 'integer'],
            "sanitaries-28" => ['required', 'integer'],
            "sanitaries-29" => ['required', 'integer'],
            "sanitaries-30" => ['required', 'integer'],
            "sanitaries-31" => ['required', 'integer'],
        ]);
        $validated_sanitary_comments = $request->validate([
            "sanitary-comment-1" => ['nullable', 'string'],
            "sanitary-comment-2" => ['nullable', 'string'],
            "sanitary-comment-3" => ['nullable', 'string'],
            "sanitary-comment-4" => ['nullable', 'string'],
            "sanitary-comment-5" => ['nullable', 'string'],
            "sanitary-comment-6" => ['nullable', 'string'],
            "sanitary-comment-7" => ['nullable', 'string'],
            "sanitary-comment-8" => ['nullable', 'string'],
            "sanitary-comment-9" => ['nullable', 'string'],
            "sanitary-comment-10" => ['nullable', 'string'],
            "sanitary-comment-11" => ['nullable', 'string'],
            "sanitary-comment-12" => ['nullable', 'string'],
            "sanitary-comment-13" => ['nullable', 'string'],
            "sanitary-comment-14" => ['nullable', 'string'],
            "sanitary-comment-15" => ['nullable', 'string'],
            "sanitary-comment-16" => ['nullable', 'string'],
            "sanitary-comment-17" => ['nullable', 'string'],
            "sanitary-comment-18" => ['nullable', 'string'],
            "sanitary-comment-19" => ['nullable', 'string'],
            "sanitary-comment-20" => ['nullable', 'string'],
            "sanitary-comment-21" => ['nullable', 'string'],
            "sanitary-comment-22" => ['nullable', 'string'],
            "sanitary-comment-23" => ['nullable', 'string'],
            "sanitary-comment-24" => ['nullable', 'string'],
            "sanitary-comment-25" => ['nullable', 'string'],
            "sanitary-comment-26" => ['nullable', 'string'],
            "sanitary-comment-27" => ['nullable', 'string'],
            "sanitary-comment-28" => ['nullable', 'string'],
            "sanitary-comment-29" => ['nullable', 'string'],
            "sanitary-comment-30" => ['nullable', 'string'],
            "sanitary-comment-31" => ['nullable', 'string'],
        ]);
        foreach ($validated_sanitaries as $sanitary_name => $condition_id) {

            $sanitary_id = substr($sanitary_name, 11);
            $comment_name =  'sanitary-comment-'. $sanitary_id;
            $comment = $validated_sanitary_comments[$comment_name];
            if (empty(ConditionSanitary::all()->where('sanitary_id', $sanitary_id)->first())) {
                ConditionSanitary::create([
                    'sanitary_id' => $sanitary_id,
                    'house_id' => $house,
                    'condition_id' => $condition_id,
                    'comment' => $comment,
                ]);
            } else {
                ConditionSanitary::where('sanitary_id', $sanitary_id)->update([
                    'condition_id' => $condition_id,
                    'comment' => $comment,
                ]);
            }
        }

        //substructure update en create
        $validated_substructures = $request->validate([
            "substructures-1" => ['required', 'integer'],
            "substructures-2" => ['required', 'integer'],
            "substructures-3" => ['required', 'integer'],
            "substructures-4" => ['required', 'integer'],
            "substructures-5" => ['required', 'integer'],
            "substructures-6" => ['required', 'integer'],
            "substructures-7" => ['required', 'integer'],
            "substructures-8" => ['required', 'integer'],
        ]);
        $validated_substructure_comments = $request->validate([
            "substructure-comment-1" => ['nullable', 'string'],
            "substructure-comment-2" => ['nullable', 'string'],
            "substructure-comment-3" => ['nullable', 'string'],
            "substructure-comment-4" => ['nullable', 'string'],
            "substructure-comment-5" => ['nullable', 'string'],
            "substructure-comment-6" => ['nullable', 'string'],
            "substructure-comment-7" => ['nullable', 'string'],
            "substructure-comment-8" => ['nullable', 'string'],
        ]);
        foreach ($validated_substructures as $substructure_name => $condition_id) {

            $substructure_id = substr($substructure_name, 14);
            $comment_name =  'substructure-comment-'. $substructure_id;
            $comment = $validated_substructure_comments[$comment_name];
            if (empty(ConditionSubstructure::all()->where('substructure_id', $substructure_id)->first())) {
                ConditionSubstructure::create([
                    'substructure_id' => $substructure_id,
                    'house_id' => $house,
                    'condition_id' => $condition_id,
                    'comment' => $comment,
                ]);
            } else {
                ConditionSubstructure::where('substructure_id', $substructure_id)->update([
                    'condition_id' => $condition_id,
                    'comment' => $comment,
                ]);
            }
        }

        //installation update en create
        $validated_superstructures = $request->validate([
            "superstructures-1" => ['required', 'integer'],
            "superstructures-2" => ['required', 'integer'],
            "superstructures-3" => ['required', 'integer'],
            "superstructures-4" => ['required', 'integer'],
            "superstructures-5" => ['required', 'integer'],
            "superstructures-6" => ['required', 'integer'],
            "superstructures-7" => ['required', 'integer'],
            "superstructures-8" => ['required', 'integer'],
            "superstructures-9" => ['required', 'integer'],
            "superstructures-10" => ['required', 'integer'],
            "superstructures-11" => ['required', 'integer'],
            "superstructures-12" => ['required', 'integer'],
            "superstructures-13" => ['required', 'integer'],
            "superstructures-14" => ['required', 'integer'],
            "superstructures-15" => ['required', 'integer'],
            "superstructures-16" => ['required', 'integer'],
            "superstructures-17" => ['required', 'integer'],
            "superstructures-18" => ['required', 'integer'],
            "superstructures-19" => ['required', 'integer'],
            "superstructures-20" => ['required', 'integer'],
            "superstructures-21" => ['required', 'integer'],
            "superstructures-22" => ['required', 'integer'],
            "superstructures-23" => ['required', 'integer'],
            "superstructures-24" => ['required', 'integer'],
            "superstructures-25" => ['required', 'integer'],
            "superstructures-26" => ['required', 'integer'],
            "superstructures-27" => ['required', 'integer'],
            "superstructures-28" => ['required', 'integer'],
            "superstructures-29" => ['required', 'integer'],
            "superstructures-30" => ['required', 'integer'],
            "superstructures-31" => ['required', 'integer'],
            "superstructures-32" => ['required', 'integer'],
            "superstructures-33" => ['required', 'integer'],
            "superstructures-34" => ['required', 'integer'],
            "superstructures-35" => ['required', 'integer'],
            "superstructures-36" => ['required', 'integer'],
            "superstructures-37" => ['required', 'integer'],
            "superstructures-38" => ['required', 'integer'],
            "superstructures-39" => ['required', 'integer'],
            "superstructures-40" => ['required', 'integer'],
            "superstructures-41" => ['required', 'integer'],
            "superstructures-42" => ['required', 'integer'],
        ]);
        $validated_superstructure_comments = $request->validate([
            "superstructure-comment-1" => ['nullable', 'string'],
            "superstructure-comment-2" => ['nullable', 'string'],
            "superstructure-comment-3" => ['nullable', 'string'],
            "superstructure-comment-4" => ['nullable', 'string'],
            "superstructure-comment-5" => ['nullable', 'string'],
            "superstructure-comment-6" => ['nullable', 'string'],
            "superstructure-comment-7" => ['nullable', 'string'],
            "superstructure-comment-8" => ['nullable', 'string'],
            "superstructure-comment-9" => ['nullable', 'string'],
            "superstructure-comment-10" => ['nullable', 'string'],
            "superstructure-comment-11" => ['nullable', 'string'],
            "superstructure-comment-12" => ['nullable', 'string'],
            "superstructure-comment-13" => ['nullable', 'string'],
            "superstructure-comment-14" => ['nullable', 'string'],
            "superstructure-comment-15" => ['nullable', 'string'],
            "superstructure-comment-16" => ['nullable', 'string'],
            "superstructure-comment-17" => ['nullable', 'string'],
            "superstructure-comment-18" => ['nullable', 'string'],
            "superstructure-comment-19" => ['nullable', 'string'],
            "superstructure-comment-20" => ['nullable', 'string'],
            "superstructure-comment-21" => ['nullable', 'string'],
            "superstructure-comment-22" => ['nullable', 'string'],
            "superstructure-comment-23" => ['nullable', 'string'],
            "superstructure-comment-24" => ['nullable', 'string'],
            "superstructure-comment-25" => ['nullable', 'string'],
            "superstructure-comment-26" => ['nullable', 'string'],
            "superstructure-comment-27" => ['nullable', 'string'],
            "superstructure-comment-28" => ['nullable', 'string'],
            "superstructure-comment-29" => ['nullable', 'string'],
            "superstructure-comment-30" => ['nullable', 'string'],
            "superstructure-comment-31" => ['nullable', 'string'],
            "superstructure-comment-32" => ['nullable', 'string'],
            "superstructure-comment-33" => ['nullable', 'string'],
            "superstructure-comment-34" => ['nullable', 'string'],
            "superstructure-comment-35" => ['nullable', 'string'],
            "superstructure-comment-36" => ['nullable', 'string'],
            "superstructure-comment-37" => ['nullable', 'string'],
            "superstructure-comment-38" => ['nullable', 'string'],
            "superstructure-comment-39" => ['nullable', 'string'],
            "superstructure-comment-40" => ['nullable', 'string'],
            "superstructure-comment-41" => ['nullable', 'string'],
            "superstructure-comment-42" => ['nullable', 'string'],
        ]);
        foreach ($validated_superstructures as $superstructure_name => $condition_id) {

            $superstructure_id = substr($superstructure_name, 16);
            $comment_name =  'superstructure-comment-'. $superstructure_id;
            $comment = $validated_superstructure_comments[$comment_name];
            if (empty(ConditionSuperstructure::all()->where('superstructure_id', $superstructure_id)->first())) {
                ConditionSuperstructure::create([
                    'superstructure_id' => $superstructure_id,
                    'house_id' => $house,
                    'condition_id' => $condition_id,
                    'comment' => $comment,
                ]);
            } else {
                ConditionSuperstructure::where('superstructure_id', $superstructure_id)->update([
                    'condition_id' => $condition_id,
                    'comment' => $comment,
                ]);
            }
        }

        return redirect()->back()->with('success','Succesvol huis bewerkt');
    }
    public function destroy()
    {

    }
}
