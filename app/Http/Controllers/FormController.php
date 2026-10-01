<?php

namespace App\Http\Controllers;

use App\Rules\Uppercase;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('new_form');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed'
        ]);

        return "Data berhasil divalidasi!";
    }

    public function showFormV()
    {
        return view('form');
    }

    public function validasiform(Request $request)
    {
        $request->validate([
            'name' => ['required', new Uppercase]
        ]);

        return 'data berhasil divalidasi';
    }
}
