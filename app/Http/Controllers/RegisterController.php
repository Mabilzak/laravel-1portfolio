<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title_head' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'name' => ['required', 'max:255'],
            'description' => 'required|max:255',
            'password' => 'required|min:3|max:255'
        ]);
        Writer::create($validatedData);
    }

}