@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">{{ $title }}</h1>
        {{-- <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
        </button>
    </div> --}}
    </div>
    <div class="container mb-5">
        {{-- form edit anjing --}}
        {{-- check if something worng --}}

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    {{-- loop all error --}}
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                {{-- end loop --}}
            </div>
        @endif
        <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Hewan</label>
                <input type="text" class="form-control" id="name" name="name"
                    value="{{ old('name') ?? $hewan->name }}">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            {{-- description --}}
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') ?? $hewan->description }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            {{-- bread --}}
            <div class="mb-3">
                <label for="bread" class="form-label">Ras</label>
                <input type="text" class="form-control" id="bread" name="breed"
                    value="{{ old('bread') ?? $hewan->breed }}">
                @error('breed')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            {{-- image --}}
            <div class="mb-3">
                <img src="{{ asset('/img/' . $hewan->image) }}" alt="" class="img-fluid" style="width: 200px">
            </div>
            <div class="mb-3">
                {{-- preview image --}}
                <label for="image" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="image" name="image" value="{{ old('image') }}">
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Umur</label>
                <input type="number" class="form-control" id="age" name="age"
                    value="{{ old('age') ?? $hewan->age }}">
                @error('age')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="weight" class="form-label">Berat</label>
                <input type="number" class="form-control" id="weight" name="weight"
                    value="{{ old('weight') ?? $hewan->weight }}">
                @error('weight')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            {{-- height --}}
            <div class="mb-3">
                <label for="height" class="form-label">Tinggi</label>
                <input type="number" class="form-control" id="height" name="height"
                    value="{{ old('height') ?? $hewan->height }}">
                @error('height')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Harga</label>
                <input type="number" class="form-control" id="price" name="price"
                    value="{{ old('price') ?? $hewan->price }}">
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection
