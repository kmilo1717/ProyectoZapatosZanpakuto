<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empleado;

class UserController extends Controller
{

    public function login(){
        return view('login');
    }

    public function log(Request $request){
        $user=$request->input('user');
        $pass=$request->input('pass');
        
        $empleado= empleado::find($user);
        
        if(is_object($empleado) && $user && $pass && $empleado->id_empleado==$user && $empleado->password==$pass){
            return redirect()->route('home');
        }
        else{
        return redirect()->route('login')
                        ->with([
                            'message' => 'Usuario y/o contraseña incorrectas'
                        ]);;
        }
    }
}
