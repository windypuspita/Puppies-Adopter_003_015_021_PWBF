@extends('layouts.main')

@section('content')
    <div class="container my-5">
        {{-- detail hewan --}}
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('/img/' . $hewan['image']) }}" class="card-img-top" alt="...">
            </div>
            <div class="col-md-6">
                <h3>{{ $hewan['name'] }}</h3>
                {{-- age --}}
                <p>Age: {{ $hewan['age'] }}</p>
                {{-- height --}}
                <p>Height: {{ $hewan['height'] }}</p>
                {{-- weight --}}
                <p>Weight: {{ $hewan['weight'] }}</p>
                {{-- breed --}}
                <p>Breed: {{ $hewan['breed'] }}</p>
                {{-- description --}}
                <p>{{ $hewan['description'] }}</p>
                {{-- price --}}
                <p>Rp: {{ $hewan['price'] }}</p>
                <a href="#" class="btn btn-primary">Adopt now</a>
            </div>
        </div>
    </div>
@endsection
