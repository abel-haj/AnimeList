<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Https\Request;
use Route;

class AuthAdminLoginController extends Controller
{
    public function __constructor() {

        $this->middleware( 'guest:admin', ['except' => ['logout']] );
    }

    public function showLogin() {

        return view('admin.login');
    }

    public function login(Request $request) {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ( Auth::guard('admin')->attempt( ['email' => $request->email,
            'password' => $request->password,] ) )
            return redirect()->intended( route('admin.dashboard') );
        
        return redirect()->back()->withInput( $request->only('email', 'remember') );
    }

    public function logout() {

        Auth::guard('admin')->logout();
        return redirect('/admin');
    }
}
