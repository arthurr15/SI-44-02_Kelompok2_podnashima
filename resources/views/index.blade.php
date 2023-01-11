@extends('component.layout')

@section('title')
    <title>D'Nasima</title>
@endsection

@section('content')
    <div class="d-md-flex h-md-100 align-items-center">

        <!-- First Half -->
        <div class="col-md-4 p-0 bg-putih h-md-100">

            <div class="text-center p-2 bg-oren">
                <h6 class="m-0">
                    PEMESANAN TIKET
                </h6>
            </div>

            <div class="book-form px-3 py-2" style="height: 280px;">
                <form id="bookform" action="{{ url('/tiket') }}" method="post">
                    @csrf
                    <div class="input-group my-2">
                        <label class="input-group-text" style="width: 50px;" for="origination2">
                            <i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>
                        </label>
                        <select name="terminal_asal" id="origination2" class="form-select" tabindex="-1"
                            aria-hidden="true">
                            <option selected="selected" value="">Terminal Asal</option>
                            <optgroup label="BANDUNG TIMUR">
                                <option value="0">CITARUM</option>

                                <option value="1">TAMAN SARI</option>
                            </optgroup>
                            <optgroup label="BANDUNG BARAT">
                                <option value="2">CIJERAH</option>

                                <option value="3">GEMPOL SARI</option>
                            </optgroup>
                            <optgroup label="BANDUNG SELATAN">
                                <option value="4">BATUNUNGGAL</option>

                                <option value="5">MENGGER</option>
                            </optgroup>
                            <optgroup label="BUAH BATU">
                                <option value="6">BUAH BATU</option>
                            </optgroup>
                            <optgroup label="KIARACONDONG">
                                <option value="7">KIARACONDONG</option>

                                <option value="8">CICAHEUM</option>
                            </optgroup>
                            <optgroup label="COBLONG">
                                <option value="9">CIPAGANTI</option>

                                <option value="10">DAGO</option>
                            </optgroup>
                            <optgroup label="BEKASI">
                                <option value="11">BEKASI KOTA</option>
                            </optgroup>
                            <optgroup label="JAKARTA PUSAT">
                                <option value="12">GAMBIR</option>
                                <option value="13">SENEN</option>
                                <option value="14">TANAH ABANG</option>
                                <option value="15">MENTENG</option>
                            </optgroup>
                            <optgroup label="JAKARTA UTARA">
                                <option value="16">KELAPA GADING</option>

                                <option value="17">ANCOL</option>

                                <option value="18">TANJUNG PRIUK</option>
                            </optgroup>
                            <optgroup label="JAKARTA TIMUR">
                                <option value="19">DUREN SAWIT</option>

                                <option value="20">PONDOK KOPI</option>

                                <option value="21">KRAMAT JATI</option>

                                <option value="22">JATINEGARA</option>

                                <option value="23">PULO GADUNG</option>
                            </optgroup>
                            <optgroup label="JAKARTA BARAT">
                                <option value="24">CENGKARENG</option>

                                <option value="25">KEBON JERUK</option>

                                <option value="26">GROGOL</option>

                                <option value="27">PALMERAH</option>
                            </optgroup>
                            <optgroup label="JAKARTA SELATAN">
                                <option value="28">CILANDAK</option>

                                <option value="29">KEBAYORAN BARU</option>

                                <option value="30">MAMPANG</option>

                                <option value="31">PANCORAN</option>

                                <option value="32">TEBET</option>
                            </optgroup>
                        </select>
                    </div>

                    <div class="input-group my-2">
                        <label class="input-group-text" style="width: 50px;" for="destination2">
                            <i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>
                        </label>
                        <select name="terminal_tujuan" id="destination2" class="form-select" tabindex="-1"
                            aria-hidden="true">
                            <option selected="selected" value="">Terminal Tujuan</option>
                            <optgroup label="BANDUNG TIMUR">
                                <option value="0">CITARUM</option>

                                <option value="1">TAMAN SARI</option>
                            </optgroup>
                            <optgroup label="BANDUNG BARAT">
                                <option value="2">CIJERAH</option>

                                <option value="3">GEMPOL SARI</option>
                            </optgroup>
                            <optgroup label="BANDUNG SELATAN">
                                <option value="4">BATUNUNGGAL</option>

                                <option value="5">MENGGER</option>
                            </optgroup>
                            <optgroup label="BUAH BATU">
                                <option value="6">BUAH BATU</option>
                            </optgroup>
                            <optgroup label="KIARACONDONG">
                                <option value="7">KIARACONDONG</option>

                                <option value="8">CICAHEUM</option>
                            </optgroup>
                            <optgroup label="COBLONG">
                                <option value="9">CIPAGANTI</option>

                                <option value="10">DAGO</option>
                            </optgroup>
                            <optgroup label="BEKASI">
                                <option value="11">BEKASI KOTA</option>
                            </optgroup>
                            <optgroup label="JAKARTA PUSAT">
                                <option value="12">GAMBIR</option>
                                <option value="13">SENEN</option>
                                <option value="14">TANAH ABANG</option>
                                <option value="15">MENTENG</option>
                            </optgroup>
                            <optgroup label="JAKARTA UTARA">
                                <option value="16">KELAPA GADING</option>

                                <option value="17">ANCOL</option>

                                <option value="18">TANJUNG PRIUK</option>
                            </optgroup>
                            <optgroup label="JAKARTA TIMUR">
                                <option value="19">DUREN SAWIT</option>

                                <option value="20">PONDOK KOPI</option>

                                <option value="21">KRAMAT JATI</option>

                                <option value="22">JATINEGARA</option>

                                <option value="23">PULO GADUNG</option>
                            </optgroup>
                            <optgroup label="JAKARTA BARAT">
                                <option value="24">CENGKARENG</option>

                                <option value="25">KEBON JERUK</option>

                                <option value="26">GROGOL</option>

                                <option value="27">PALMERAH</option>
                            </optgroup>
                            <optgroup label="JAKARTA SELATAN">
                                <option value="28">CILANDAK</option>

                                <option value="29">KEBAYORAN BARU</option>

                                <option value="30">MAMPANG</option>

                                <option value="31">PANCORAN</option>

                                <option value="32">TEBET</option>
                            </optgroup>
                        </select>

                    </div>

                    <div class="input-group my-2">
                        <span id="date2" class="input-group-text" style="width: 50px;"><i
                                class="fa fa-calendar fa-lg" aria-hidden="true"></i></span>
                        <input type="date" name="tanggal_keberangkatan" aria-describedby="date2"
                            class="form-control">
                    </div>

                    <div class="input-group my-2">
                        <label class="input-group-text" style="width: 50px;" for="adult2">
                            <i class="fa fa-male fa-lg" aria-hidden="true"></i>
                        </label>
                        <select name="dewasa" id="adult2" class="form-select" tabindex="-1" aria-hidden="true">
                            <optgroup label="Dewasa (≥ 3 thn)">
                                <option selected="selected" value="1">1 Dewasa</option>
                                <option value="2">2 Dewasa</option>
                                <option value="3">3 Dewasa</option>
                                <option value="4">4 Dewasa</option>
                                <option value="5">5 Dewasa</option>
                                <option value="6">6 Dewasa</option>
                                <option value="7">7 Dewasa</option>
                                <option value="8">8 Dewasa</option>
                                <option value="9">9 Dewasa</option>
                                <option value="10">10 Dewasa</option>
                            </optgroup>
                        </select>

                    </div>

                    <div class="input-group my-2">
                        <label class="input-group-text" style="width: 50px;" for="anak">
                            <i class="fa fa-child fa-lg" aria-hidden="true"></i>
                        </label>
                        <select name="anak" id="anak" class="form-select" tabindex="-1" aria-hidden="true">
                            <optgroup label="Infant (< 3 thn)">
                                <option selected="selected" value="0">0 Infant</option>
                                <option value="1">1 Infant</option>
                                <option value="2">2 Infant</option>
                                <option value="3">3 Infant</option>
                                <option value="4">4 Infant</option>
                                <option value="5">5 Infant</option>
                                <option value="6">6 Infant</option>
                                <option value="7">7 Infant</option>
                                <option value="8">8 Infant</option>
                                <option value="9">9 Infant</option>
                                <option value="10">10 Infant</option>
                            </optgroup>
                        </select>

                    </div>

                    <div class="input-group my-2">
                        <label class="input-group-text" style="width: 50px;" for="kelas">
                            <i class="fa fa-bus fa-lg" aria-hidden="true"></i>
                        </label>
                        <select name="kelas" id="kelas" class="form-select" tabindex="-1" aria-hidden="true">
                            <optgroup label="Kelas Kursi">
                                <option selected="selected" value="Ekonomi">Ekonomi - Rp 125.000</option>
                                <option value="VIP">VIP - Rp 300.000</option>
                            </optgroup>
                        </select>

                    </div>

                    <div class=" my-4 text-center">
                        <button type="submit" class="btn btn-primary">Pesan &amp; Cari BIS</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Second Half -->
        <div class="col-md-8 p-0 h-md-100 loginarea">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
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
