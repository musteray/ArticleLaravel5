<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //

    public function index()
    {
    	return view('user.login');
    }

    public function authenticate(Requests\LoginRequest $req)
    {
    	$input = $req->only('username', 'password');

        if( auth()->attempt($input) )
        {
            return redirect()->intended('article');
        }
        else
        {
            return redirect('/');
        }
    }
}
