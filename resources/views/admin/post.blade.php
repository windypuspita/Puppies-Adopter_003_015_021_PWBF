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
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <a href="{{ route('admin.post.anjing') }}" class="text-decoration-none">
                    <div class="card h-100">
                        <img src="https://imgx.sonora.id/crop/0x0:0x0/x/photo/2022/12/12/1jpg-20221212101100.jpg"
                            class="card-img-top" style="height: 200px; object-fit: cover; object-position: center;"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Post Anjing</h5>
                            {{-- <p class="card-text">
                                10 Ekor
                            </p> --}}
                        </div>
                    </div>

                </a>
            </div>
            <div class="col">
                <a href="{{ route('admin.post.kucing') }}" class="text-decoration-none">
                    <div class="card h-100">
                        <img src="https://asset.kompas.com/crops/3zjyFUucOsGeDBDqBQ05d3nxUr8=/0x0:750x500/750x500/data/photo/2021/09/05/61341e3827280.jpg"
                            class="card-img-top" style="height: 200px; object-fit: cover; object-position: center;"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Post Kucing</h5>
                            {{-- <p class="card-text">
                                30 Ekor
                            </p> --}}
                        </div>
                    </div>

                </a>
            </div>
            <div class="col">
                <a href="{{ route('admin.post.hamster') }}" class="text-decoration-none">
                    <div class="card h-100">
                        <img src="https://www.kepogaul.com/wp-content/uploads/2018/08/000208-06_foto-hamster-lucu-dan-imut_hamster-makan-brokoli_800x450_cc0-min.jpg"
                            class="card-img-top" style="height: 200px; object-fit: cover; object-position: center;"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Post Hamster</h5>
                            {{-- <p class="card-text">
                                10 Ekor
                            </p> --}}
                        </div>
                    </div>

                </a>
            </div>
        </div>
    </div>
@endsection
