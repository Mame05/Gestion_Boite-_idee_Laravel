<?php

namespace App\Http\Controllers;

use App\Models\Idee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller

{

    /*C'est pour la connection*/
    public function login(){
        return view('auth.login');
    }

    /*C'est pour authentifier l'utilisateur c'est de vérifuer si il a entrer les bonnes informations*/
    public function AuthentificationLogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt($request->only('email','password'))){
            $lastIdee = Idee::latest()->first();
            if ($lastIdee) {
                return redirect()->route('idees.show', $lastIdee->id);
            }
            // If no idea exists, redirect to another default route
            return redirect()->route('idees.index');
        }
        return back()->with('error','Les identifiants ne corrspondent pas');
    }

    /*C'est pour la deconnection*/
    public function logout(){
        auth()->logout();
        return redirect('/idees');
    }


}

