<?php

namespace App\Http\Controllers;

use App\Models\Hamster;
use App\Models\Kucing;
use App\Models\Puppy;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        $data = [
            'title' => 'Admin Page',
        ];
        return view('admin.index', $data);
    }

    public function post()
    {
        $data = [
            'title' => 'Post',
        ];

        return view('admin.post', $data);
    }

    public function anjing()
    {
        $data = [
            'title' => 'Post Anjing',
            'routeTambah' => route('admin.post.anjingTambah'),
            'hewan' => Puppy::all(),
            'routeDelete' => 'admin.post.anjingHapus',
            'routeEdit' => 'admin.post.anjingEdit',
        ];

        return view('admin.post.index', $data);
    }

    public function anjingTambah()
    {
        $data = [
            'title' => 'Tambah Anjing',
            'route' => route('admin.post.anjingSimpan'),
        ];

        return view('admin.post.create', $data);
    }

    public function anjingSimpan(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'breed' => 'required',
            'age' => 'required',
            'weight' => 'required',
            'height' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'price' => 'required',
        ]);

        $image = $request->file('image');
        $namaimage = time() . '.' . $image->extension();
        $image->move(public_path('img'), $namaimage);

        Puppy::create([
            'name' => $request->name,
            'breed' => $request->breed,
            'age' => $request->age,
            'weight' => $request->weight,
            'height' => $request->height,
            'description' => $request->description,
            'image' => $namaimage,
            'price' => $request->price,
        ]);

        return redirect()->route('admin.post.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function anjingEdit($id)
    {
        $data = [
            'title' => 'Edit Anjing',
            'hewan' => Puppy::findOrFail($id),
            'route' => route('admin.post.anjingUpdate', $id),
        ];

        return view('admin.post.edit', $data);
    }

    public function anjingUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'breed' => 'required',
            'age' => 'required',
            'weight' => 'required',
            'height' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'price' => 'required',
        ]);

        $image = $request->file('image');
        $namaimage = time() . '.' . $image->extension();
        $image->move(public_path('img'), $namaimage);

        Puppy::where('id', $id)->update([
            'name' => $request->name,
            'breed' => $request->breed,
            'age' => $request->age,
            'weight' => $request->weight,
            'height' => $request->height,
            'description' => $request->description,
            'image' => $namaimage,
            'price' => $request->price,
        ]);

        return redirect()->route('admin.post.index')->with('success', 'Data Berhasil Diubah');
    }

    public function anjingHapus($id)
    {
        Puppy::where('id', $id)->delete();
        return redirect()->route('admin.post.index')->with('success', 'Data Berhasil Dihapus');
    }

    public function kucing()
    {
        $data = [
            'title' => 'Post Kucing',
            'routeTambah' => route('admin.post.kucingTambah'),
            'hewan' => Kucing::all(),
            'routeDelete' => 'admin.post.kucingHapus',
            'routeEdit' => 'admin.post.kucingEdit',
        ];

        return view('admin.post.index', $data);
    }

    public function kucingTambah()
    {
        $data = [
            'title' => 'Tambah Kucing',
            'route' => route('admin.post.kucingSimpan'),
        ];

        return view('admin.post.create', $data);
    }

    public function kucingSimpan(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'breed' => 'required',
            'age' => 'required',
            'weight' => 'required',
            'height' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'price' => 'required',
        ]);

        $image = $request->file('image');
        $namaimage = time() . '.' . $image->extension();
        $image->move(public_path('img'), $namaimage);

        Kucing::create([
            'name' => $request->name,
            'breed' => $request->breed,
            'age' => $request->age,
            'weight' => $request->weight,
            'height' => $request->height,
            'description' => $request->description,
            'image' => $namaimage,
            'price' => $request->price,
        ]);

        return redirect()->route('admin.post.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function kucingEdit($id)
    {
        $data = [
            'title' => 'Edit Kucing',
            'hewan' => Kucing::findOrFail($id),
            'route' => route('admin.post.kucingUpdate', $id),
        ];

        return view('admin.post.edit', $data);
    }

    public function kucingUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'breed' => 'required',
            'age' => 'required',
            'weight' => 'required',
            'height' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'price' => 'required',
        ]);

        $image = $request->file('image');
        $namaimage = time() . '.' . $image->extension();
        $image->move(public_path('img'), $namaimage);

        Kucing::where('id', $id)->update([
            'name' => $request->name,
            'breed' => $request->breed,
            'age' => $request->age,
            'weight' => $request->weight,
            'height' => $request->height,
            'description' => $request->description,
            'image' => $namaimage,
            'price' => $request->price,
        ]);

        return redirect()->route('admin.post.index')->with('success', 'Data Berhasil Diubah');
    }

    public function kucingHapus($id)
    {
        Kucing::where('id', $id)->delete();
        return redirect()->route('admin.post.index')->with('success', 'Data Berhasil Dihapus');
    }

    public function hamster()
    {
        $data = [
            'title' => 'Post Hamster',
            'routeTambah' => route('admin.post.hamsterTambah'),
            'hewan' => Hamster::all(),
            'routeDelete' => 'admin.post.hamsterHapus',
            'routeEdit' => 'admin.post.hamsterEdit',
        ];

        return view('admin.post.index', $data);
    }

    public function hamsterTambah()
    {
        $data = [
            'title' => 'Tambah Hamster',
            'route' => route('admin.post.hamsterSimpan'),
        ];

        return view('admin.post.create', $data);
    }

    public function hamsterSimpan(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'breed' => 'required',
            'age' => 'required',
            'weight' => 'required',
            'height' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'price' => 'required',
        ]);

        $image = $request->file('image');
        $namaimage = time() . '.' . $image->extension();
        $image->move(public_path('img'), $namaimage);

        Hamster::create([
            'name' => $request->name,
            'breed' => $request->breed,
            'age' => $request->age,
            'weight' => $request->weight,
            'height' => $request->height,
            'description' => $request->description,
            'image' => $namaimage,
            'price' => $request->price,
        ]);

        return redirect()->route('admin.post.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function hamsterEdit($id)
    {
        $data = [
            'title' => 'Edit Hamster',
            'hewan' => Hamster::findOrFail($id),
            'route' => route('admin.post.hamsterUpdate', $id),
        ];

        return view('admin.post.edit', $data);
    }

    public function hamsterUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'breed' => 'required',
            'age' => 'required',
            'weight' => 'required',
            'height' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'price' => 'required',
        ]);

        $image = $request->file('image');
        $namaimage = time() . '.' . $image->extension();
        $image->move(public_path('img'), $namaimage);

        Hamster::where('id', $id)->update([
            'name' => $request->name,
            'breed' => $request->breed,
            'age' => $request->age,
            'weight' => $request->weight,
            'height' => $request->height,
            'description' => $request->description,
            'image' => $namaimage,
            'price' => $request->price,
        ]);

        return redirect()->route('admin.post.index')->with('success', 'Data Berhasil Diubah');
    }

    public function hamsterHapus($id)
    {
        Hamster::where('id', $id)->delete();
        return redirect()->route('admin.post.index')->with('success', 'Data Berhasil Dihapus');
    }
}
