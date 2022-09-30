<?php

namespace App\Http\Controllers\users;

use App\Models\House;
use App\Models\Renter;
use Illuminate\Http\Request;

class RenterController extends Controller
{
    //  Checks if user is logged in
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $renters = Renter::all();
        return view('admin/renters/renters')->with(['renters' => $renters]);
    }
    public function show(){

    }
    public function create(){
        $houses = House::all();

        return view('admin/renters/create')->with([
            'houses' => $houses,
        ]);
    }
    public function store(Request $request){

        $validated = $request->validate([
            "initials" => ['required', 'string'],
            "lastname" => ['required', 'string'],
            "email" => ['required', 'string'],
            "phonenumber" => ['required', 'string'],
            "house" => ['required', 'integer'],
        ]);
        Renter::create([
            'initials' => $validated['initials'],
            'lastname' => $validated['lastname'],
            'email' => $validated['email'],
            'phonenumber' => $validated['phonenumber'],
            'house_id' => $validated['house'],
        ]);
        return redirect()->back()->with('success','Succesvol huurder toegevoegd');
    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }
}
