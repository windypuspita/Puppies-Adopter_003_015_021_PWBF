<?php

namespace App\Http\Controllers;

use App\Models\Puppy;

class PuppyController extends Controller
{
    public function index()
    {
        $puppies = Puppy::all();
        return view('getPuppies', compact('puppies'));
    }

    public function show($id)
    {
        $puppy = Puppy::findOrFail($id);
        return view('getPuppyById', compact('puppy'));
    }
}