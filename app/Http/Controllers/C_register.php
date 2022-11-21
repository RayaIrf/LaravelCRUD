<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash; 

class C_register extends Controller
{
    public function index()
    {
        return view('V_register');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);
        $validation['password'] = Hash::make($validation['password']);

        User::create($validation);
        return redirect('/login')->with('success', 'Registrasi Berhasil! Silahkan Login');
    }
}