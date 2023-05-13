<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required',
        ];
    }

    public function showLoginForm()
    {
        return view('pages.autentificare');
    }

    public function login(Request $request)
    {
        $this->validate($request, $this->rules());
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        } else {
            return back()->withErrors(['email' => 'Autentificarea a eșuat.']);
        }
    }

    public function showRegistrationForm()
    {
        return view('pages.inregistrare');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect('register')
                ->withErrors($validator)
                ->withInput();
        }

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        Auth::login($user);

        return redirect('/');
    }
}
