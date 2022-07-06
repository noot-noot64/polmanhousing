<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session;


class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = User::all()->where('email', $validated['email'])->first();
            if(!empty($user['deleted_at'])){
                //singed niet in
                return redirect()->back()->withErrors(['status' =>'Login gegevens incorrect']);
            }else{
                //singed wel in
                $request->session()->regenerate();
                return redirect()->route('dashboard.home')->with(['message' => ['message' => 'Succesvol ingelogd', 'type' => 'success']]);
            }
        }

        return redirect()->back()->withErrors(['status' =>'Login gegevens incorrect']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
