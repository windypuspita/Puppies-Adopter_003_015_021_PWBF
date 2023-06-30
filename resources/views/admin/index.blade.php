@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
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

    <div class="container">
        {{-- 3 card, jumlah anjing, kucing, dan hamster --}}
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    
                    <div class="card-body">
                        <h5 class="card-title">Banyak Anjing</h5>
                        <p class="card-text">
                            10 Ekor
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    
                    <div class="card-body">
                        <h5 class="card-title">Banyak Kucing</h5>
                        <p class="card-text">
                            30 Ekor
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    
                    <div class="card-body">
                        <h5 class="card-title">Banyak Hamster</h5>
                        <p class="card-text">
                            10 Ekor
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
