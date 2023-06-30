<?php

namespace App\Http\Controllers;

use App\Models\Hamster;
use App\Models\Kucing;
use App\Models\Puppy;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('index');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerProses(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $data['is_admin'] = false;

        $user = User::create($data);
        auth()->login($user);
        return redirect()->route('user.home');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginProses(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->is_admin) {
                return redirect()->route('admin.home');
            } else {
                return redirect()->route('user.home');
            }
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }

    public function list()
    {
        $data = [
            'title' => 'Kategori',
        ];
        return view('list', $data);
    }

    public function anjing()
    {
        $data = [
            'title' => 'Anjing',
            'category' => 'puppies',
            'hewan' => Puppy::all(),
        ];
        return view('category-list', $data);
    }

    public function kucing()
    {
        $data = [
            'title' => 'Kucing',
            'category' => 'kittens',
            'hewan' => Kucing::all(),
        ];
        return view('category-list', $data);
    }

    public function hamster()
    {
        $data = [
            'title' => 'Hamster',
            'category' => 'hamsters',
            'hewan' => Hamster::all(),
        ];
        return view('category-list', $data);
    }
}
