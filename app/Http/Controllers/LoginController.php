<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Response;


class LoginController extends Controller
{  

    public function login(Request $request)
    {

        $request->validate([
        'email' => 'required|email',
        'Password' => 'required|min:6|max:20',  
        ],[
      
        'email.required'=>'El correo electrónico es obligatorio.',
        'email.email'=>'Digite un correo electrónico valido.',
        'Password.required'=>'La contraseña es obligatoria.',
        'Password.min'=>'La contraseña debe tener mínimo 6 caracteres.',
        'Password.max'=>'La contraseña debe tener máximo 20 caracteres.',
       ]); 

       $data =['email' => $request['email'],'password' => $request['Password']];

       if (Auth::guard('usuarios')->attempt($data)) {
          return redirect()->intended('welcome'); 
        } 
        else 
       {
         return back()
         ->withErrors(['email'=>'Usuario y o contraseña incorrecto'])
         ->withInput(request(['email']));
        } 
   
    }


    public function logout()
    {
       Auth::guard('usuarios')->logout();
       return redirect('/');
    }

}
