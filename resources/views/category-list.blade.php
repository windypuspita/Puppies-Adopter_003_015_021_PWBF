@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <h3 class="text-center">
            @if ($category == 'puppies')
                Anjing ini menunggu kehadiran anda:
            @elseif ($category == 'kittens')
                Kucing ini menunggu kehadiran anda:
            @elseif ($category == 'hamsters')
                Hamster ini menunggu kehadiran anda:
            @endif
        </h3>
        <div class="row">
            @foreach ($hewan as $item)
                <div class="col-md-4">
                    <div class="card mt-3" style="width: 18rem;">
                        <img src="{{ asset('/img/' . $item['image']) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item['name'] }}</h5>
                            <p class="card-text">{{ $item['description'] }}</p>
                            <p class="card-text">Rp: {{ $item['price'] }}</p>
                            <a href="{{ route('login') }}" class="btn btn-primary">Adopt now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
