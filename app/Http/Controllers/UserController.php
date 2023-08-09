<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function username()
    {
        return 'username';
    }

    public function index() 
    {
        return view('admin.login', [
            'title' => 'Login',
        ]);
    }

    public function authenticate(Request $request)
    {
        $credential = $request->validate([
            'username' => 'required',
            'password'=> 'required'
        ]);

        if (Auth::attempt($credential)) {
            // regenerate digunakan untuk keamanan dari "session fixation"
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }
        
        return back()->with('error', 'Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    
    public function store(Request $request)
    {
        // terdapat 2 format penulisan validate
       $validatedData = $request->validate([
        'name' => 'required|max:255',
        'email'=>'required|unique:users|email:rfc,dns|max:255',
        'username'=>'required|unique:users',
        'password'=>'required|min:8|max:255'
       ]);

    //    dd($validatedData);
    //    $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']); 
       
        User::create($validatedData);
        // session()->flash('success', 'Registrasi Berhasil! Silahkan Login');

      return redirect('/login')->with('success', 'Account Has Been Registerd, Please Login!');
    }

}
