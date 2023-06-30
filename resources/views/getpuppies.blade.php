@extends('layouts.main')

@section('content')
    <div class="container">
        <h3>Puppies menunggu kehadiran anda:</h3>
        <div class="row">
            @foreach ($puppies as $poppie)
                <div class="col-md-4">
                    <div class="card mt-3" style="width: 18rem;">
                        <img src="{{ $poppie['image'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $poppie['name'] }}</h5>
                            <p class="card-text">{{ $poppie['description'] }}</p>
                            <p class="card-text">Rp: {{ $poppie['price'] }}</p>
                            <a href="#" class="btn btn-primary">Adopt now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
