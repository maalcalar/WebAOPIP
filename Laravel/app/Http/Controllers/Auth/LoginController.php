<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['only' => 'showLogin']);
    }

    public function showLogin()
    {
        //return view('admin.login');
        return redirect()->route('loginview');
    }

    public function login()
    {
        $credentials = $this->validate(request(), [
            'email' => 'email|required|string', 
            'password' => 'required|string'
        ], [
            'email' => 'El :attribute debe ser un :attribute válido.', 
            'required' => 'El campo :attribute es obligatorio.'
        ]);

        if(Auth::attempt($credentials))
        {
            return redirect()->route('/admin/dashboard');
        }

        return back()
            ->withErrors(['session' => 'Estas credenciales no son válidas.'])
            ->withInput(request(['email']));
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/admin');
    }

    /*use AuthenticatesUsers;

    @var string
    protected $redirectTo = '/home';

    @return void
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }*/
}
