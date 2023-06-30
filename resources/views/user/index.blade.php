@extends('layouts.main')

@section('css')
    <style>
        .jumbotron {
            background-image: url('https://images.unsplash.com/photo-1517849845537-4d257902454a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHVwcGllc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80');
            background-size: cover;
            background-position: center;
            height: 80vh;
            color: white;
        }

        .layer1 {
            background-color: rgba(0, 0, 0, 0.5);
            height: 100%;
        }

        .jum-body {
            height: 100%;
        }

        .section {
            padding: 0 50px;
        }
    </style>
@endsection

@section('content')
    <div class="jumbotron">
        <div class="layer1">
            <div class="container jum-body">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="me-3">
                        <h1 class="display-4">Puppies menunggu kehadiran anda:</h1>
                        <p class="lead">Puppies yang kami sediakan adalah puppies yang sehat dan lucu.</p>
                        <hr class="my-4">
                        <p>Anda dapat mengadopsi puppies yang anda inginkan dengan harga yang terjangkau.</p>
                        <a class="btn btn-primary btn-lg" href="#" role="button">Adopt now</a>
                    </div>
                    {{-- gambar puppy --}}
                    <div class="">
                        <img class="img-fluid" style="height: 80vh;"
                            src="https://images.unsplash.com/photo-1517849845537-4d257902454a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cHVwcGllc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        {{-- deskripsi tentang website --}}
        <h2 class="display-5">Tentang Kami</h2>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <p class="lead">Puppies Adopter adalah website yang menyediakan layanan adopsi puppies. Kami menyediakan
                    berbagai macam jenis puppies yang lucu dan sehat. Kami juga menyediakan layanan konsultasi gratis
                    untuk anda yang ingin mengadopsi puppies.</p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="https://cdn-2.tstatic.net/manado/foto/bank/images/anjing4.jpg" alt="">
            </div>
        </div>
        <br>
        <br>
        <h2 class="display-5">Kategori Adopsi</h2>
        <hr>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <a href="{{ route('user.list.kucing') }}" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        {{-- img kucing --}}
                        <img src="https://asset.kompas.com/crops/3zjyFUucOsGeDBDqBQ05d3nxUr8=/0x0:750x500/750x500/data/photo/2021/09/05/61341e3827280.jpg"
                            class="card-img-top" style="height: 200px; object-fit: cover; object-position: center;"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Kucing</h5>
                            {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p> --}}
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('user.list.anjing') }}" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        {{-- <img src="..." class="card-img-top" alt="..."> --}}
                        {{-- img anjing --}}
                        <img src="https://imgx.sonora.id/crop/0x0:0x0/x/photo/2022/12/12/1jpg-20221212101100.jpg"
                            class="card-img-top" style="height: 200px; object-fit: cover; object-position: center;"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Anjing</h5>
                            {{-- <p class="card-text">This is a short card.</p> --}}
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('user.list.hamster') }}" class="text-decoration-none">
                    <div class="card h-100 shadow-sm">
                        {{-- <img src="..." class="card-img-top" alt="..."> --}}
                        {{-- img hamster --}}
                        <img src="https://www.kepogaul.com/wp-content/uploads/2018/08/000208-06_foto-hamster-lucu-dan-imut_hamster-makan-brokoli_800x450_cc0-min.jpg"
                            class="card-img-top" style="height: 200px; object-fit: cover; object-position: center;"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Hamster</h5>
                            {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content.</p> --}}
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="py-5 bg-light section">
        <div class="container">
            <h2 class="display-5">Mengapa Harus Kami</h2>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid"
                        src="https://img.okezone.com/content/2019/06/17/612/2067264/wow-peneliti-ungkap-anjing-bisa-deteksi-orang-yang-depresi-AGxZgV0nKj.jpeg"
                        alt="">
                </div>
                <div class="col-md-6">
                    <p class="lead">
                        Kami menyediakan layanan konsultasi gratis untuk anda yang ingin mengadopsi puppies. Kami juga
                        menyediakan berbagai macam jenis puppies yang lucu dan sehat. Kami juga menyediakan layanan
                        konsultasi gratis untuk anda yang ingin mengadopsi puppies.
                    </p>
                </div>

            </div>
        </div>
    </div>

    <div class="container my-5 text-center">
        {{-- contact us --}}
        <h2 class="display-5">Hubungi Kami</h2>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <p class="lead">Anda dapat menghubungi kami melalui:</p>

                <p>Telepon: 08123456789</p>
                <p>Email: puppysadopt@gmail.com</p>
                <p>Alamat: Jl. Puppies No. 1, Jakarta</p>

            </div>
        </div>
    </div>
@endsection
