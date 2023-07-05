<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function show(){
        if(Auth::check()){
            return redirect()->route('posts.index');
        }
        return view('pages.admin');

    }

    public function login(Request $request){
       
            $data = $request->all();
            $user = User::where('role', $data['role'])->first();
            if ($user) {
                if (password_verify($data['password'], $user->password)) {                    
                    $message = 'Usuario logueado correctamente';
                    Auth::login($user);
                    return redirect()->route('posts.index');
                } else {
                    $message = 'Contraseña incorrecta';
                    return view('pages.admin')->with('message', $message);
                }
            } else {
                $message = 'Usuario no encontrado';
                return view('pages.admin')->with('message', $message);
            }
        

    }
    public function logout(){
        // Session::flush();
        Auth::logout();
        return redirect()->to('/');
    }

}
