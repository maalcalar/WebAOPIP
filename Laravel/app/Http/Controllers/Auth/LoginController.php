<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function login()
    {
        $credentials = $this->validate(request(), [
            'email' => 'email|required|string', 
            'contrasena' => 'required|string'
        ]);

        if(Auth::attempt($credentials))
        {
            return 'Has iniciado sesión.';
        }

        return back()
            ->withErrors(['email' => trans('auth.failed')])
            ->withInput(request(['email']));
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
