<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends  Controller
{
	public function getLogin()
	{
		return view('login.login');
	}

	//public function ge

	public function postLogin(Request $request)
	{
		$this->validate($request,[
			'usuario' => 'required',
			'contrasena' => 'required'
		]);

		if( Auth::attempt([ 'usuario' => $request['username'] , 'contrasena' => $request['password'] ]) )
		{
			return redirect()->back()->with(['fail'=>'Error al iniciar sesion']);
		}

		return redirect()->route('home');	
	}
}