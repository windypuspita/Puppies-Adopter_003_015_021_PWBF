<?php

namespace App\Http\Controllers;

use App\Models\Hamster;
use App\Models\Kucing;
use App\Models\Puppy;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function index()
    {
        return view('user.index');
    }

    public function anjing()
    {
        $data = [
            'title' => 'Anjing',
            'category' => 'puppies',
            'hewan' => Puppy::all(),
        ];
        return view('user.category-list', $data);
    }

    public function kucing()
    {
        $data = [
            'title' => 'Kucing',
            'category' => 'kittens',
            'hewan' => Kucing::all(),
        ];
        return view('user.category-list', $data);
    }

    public function hamster()
    {
        $data = [
            'title' => 'Hamster',
            'category' => 'hamsters',
            'hewan' => Hamster::all(),
        ];
        return view('user.category-list', $data);
    }

    public function anjingDetail($id)
    {
        $data = [
            'title' => 'Detail Anjing',
            'hewan' => Puppy::findOrFail($id),
        ];
        return view('user.detail', $data);
    }

    public function kucingDetail($id)
    {
        $data = [
            'title' => 'Detail Kucing',
            'hewan' => Kucing::findOrFail($id),
        ];
        return view('user.detail', $data);
    }

    public function hamsterDetail($id)
    {
        $data = [
            'title' => 'Detail Hamster',
            'hewan' => Hamster::findOrFail($id),
        ];
        return view('user.detail', $data);
    }
}
