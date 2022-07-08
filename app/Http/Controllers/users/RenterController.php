<?php

namespace App\Http\Controllers\users;

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
    public function create(){

    }
    public function edit(){

    }
    public function destroy(){

    }
}
