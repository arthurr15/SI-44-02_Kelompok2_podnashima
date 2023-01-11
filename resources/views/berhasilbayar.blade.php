@extends('component.layout')

@section('title')
    <title>Tiket Berhasil Dibeli</title>
@endsection

@section('content')
    <div class="d-md-flex h-md-100 align-items-center">

        <!-- First Half -->
        <div class="col-md-3 p-0 bg-putih h-md-100">

            <div class="text-center p-2" style="background-color: rgb(0, 224, 0)">
                <h6 class="m-0">
                    PEMESANAN TIKET BERHASIL
                </h6>
            </div>

            <div class="book-form p-3">

                <div class="card">
                    <div class="card-header">
                        {{ $data->terminal_asal }} - {{ $data->terminal_tujuan }}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Tiket {{ $data->kelas }}</h5>
                        <h6>Tanggal Keberangkatan :</h6>
                        {{ $data->tanggal_keberangkatan }}
                        <hr>
                        <b>Dewasa :</b> {{ $data->dewasa }}
                        <br>
                        <b>Anak :</b> {{ $data->dewasa }}
                        <hr>
                        <b>Total :</b> Rp. {{ $data->tarif }},-
                    </div>
                    <div class="card-footer text-muted">
                        <p class="card-text"><small class="text-muted">Tiket dipesan pada : <br>
                                {{ $data->created_at }}</small></p>
                    </div>
                </div>

                <div class="my-3">
                    <style>
                        .tombol-submit {
                            width: 100%;
                            height: 43px;
                            background: #949393;
                            border-radius: 10px;
                            color: whitesmoke;
                        }
    
                        .tombol-submit:hover {
                            background: #808080;
                            color: whitesmoke;
                        }
                    </style>
                    <a class="btn tombol-submit" href="/">Kembali</a>
                </div>
                
            </div>
        </div>

        <!-- Second Half -->
        <div class="col-md-9 p-0 h-md-100">

            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('/img/car1.jpeg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>PO D’Nasima</h5>
                            <p>PO andalan lintas Bandung-Jakarta</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/img/car2.jpeg') }}" class="d-block w-100" alt="car2.jpg">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>PO D’Nasima</h5>
                            <p>PO andalan lintas Bandung-Jakarta</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/img/car3.jpeg') }}" class="d-block w-100" alt="car3.jpg">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>PO D’Nasima</h5>
                            <p>PO andalan lintas Bandung-Jakarta</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/img/car4.jpeg') }}" class="d-block w-100" alt="car4.jpg">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>PO D’Nasima</h5>
                            <p>PO andalan lintas Bandung-Jakarta</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>

    </div>
@endsection
