<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        @media (min-width: 768px) {
            .h-md-100 {
                height: 100vh;
            }
        }

        .btn-round {
            border-radius: 30px;
        }

        .bg-left {
            background: #fca311;
        }

        .bg-right {
            background: #e5e5e5;
        }

        .bg-utama {
            background: #14213d;
        }

        .text-utama {
            color: #14213d;
        }

        .text-utamaterang {
            color: #e5e5e5;
        }
    </style>

    <title>TiketBis</title>
</head>

<body>
    <div class="d-md-flex h-md-100 align-items-center">

        <!-- First Half -->
        <div class="col-md-4 p-0 bg-left h-md-100">
            <div class="text-white d-md-flex p-2 text-center justify-content-center" style="height: 150px;">
                <div class="logoarea p-2 d-flex align-items-center">
                    <img src="{{ asset('/img/logo.gif') }}" alt="" width="150px">
                </div>
                <div class="logoarea p-2 d-flex align-items-center">
                    <h3 class="text-utama">BIS ARTUR</h3>
                </div>
            </div>

            <div class="text-center p-2 bg-utama text-utamaterang">
                <h6 class="m-0">
                    PEMESANAN TIKET
                </h6>
            </div>

            <div class="book-form px-3 py-2" style="height: 280px;">
                <form id="bookform" action="" method="post">
                    <div class="input-group my-2">
                        <label class="input-group-text" for="origination2">
                            <i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>
                        </label>
                        <select name="origination" id="origination2" class="form-select" tabindex="-1"
                            aria-hidden="true">
                            <option selected="selected" value="">Terminal Asal</option>
                            <optgroup label="BANDUNG TIMUR">
                                <option value="">CITARUM</option>

                                <option value="">TAMAN SARI</option>
                            </optgroup>
                            <optgroup label="BANDUNG BARAT">
                                <option value="">CIJERAH</option>

                                <option value="">GEMPOL SARI</option>
                            </optgroup>
                            <optgroup label="BANDUNG SELATAN">
                                <option value="">BATUNUNGGAL</option>

                                <option value="">MENGGER</option>
                            </optgroup>
                            <optgroup label="BUAH BATU">
                                <option value="">BUAH BATU</option>
                            </optgroup>
                            <optgroup label="KIARACONDONG">
                                <option value="">KIARACONDONG</option>

                                <option value="">CICAHEUM</option>
                            </optgroup>
                            <optgroup label="COBLONG">
                                <option value="">CIPAGANTI</option>

                                <option value="">DAGO</option>
                            </optgroup>
                            <optgroup label="BEKASI">
                                <option value="">BEKASI</option>
                            </optgroup>
                            <optgroup label="JAKARTA PUSAT">
                                <option value="">GAMBIR</option>
                                <option value="">SENEN</option>
                                <option value="">TANAH ABANG</option>
                                <option value="">MENTENG</option>
                            </optgroup>
                            <optgroup label="JAKARTA UTARA">
                                <option value="">KELAPA GADING</option>

                                <option value="">ANCOL</option>

                                <option value="">TANJUNG PRIUK</option>
                            </optgroup>
                            <optgroup label="JAKARTA TIMUR">
                                <option value="">DUREN SAWIT</option>

                                <option value="">PONDOK KOPI</option>

                                <option value="">KRAMAT JATI</option>

                                <option value="">JATINEGARA</option>

                                <option value="">PULO GADUNG</option>
                            </optgroup>
                            <optgroup label="JAKARTA BARAT">
                                <option value="">CENGKARENG</option>

                                <option value="">KEBON JERUK</option>

                                <option value="">GROGOL</option>

                                <option value="">PALMERAH</option>
                            </optgroup>
                            <optgroup label="JAKARTA SELATAN">
                                <option value="">CILANDAK</option>

                                <option value="">KEBAYORAN BARU</option>

                                <option value="">MAMPANG</option>

                                <option value="">PANCORAN</option>

                                <option value="">TEBET</option>
                            </optgroup>
                        </select>
                    </div>

                    <div class="input-group my-2">
                        <label class="input-group-text" for="destination2">
                            <i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>
                        </label>
                        <select name="destination" id="destination2" class="form-select" tabindex="-1"
                            aria-hidden="true">
                            <option selected="selected" value="">Terminal Tujuan</option>
                            <optgroup label="BANDUNG TIMUR">
                                <option value="">CITARUM</option>

                                <option value="">TAMAN SARI</option>
                            </optgroup>
                            <optgroup label="BANDUNG BARAT">
                                <option value="">CIJERAH</option>

                                <option value="">GEMPOL SARI</option>
                            </optgroup>
                            <optgroup label="BANDUNG SELATAN">
                                <option value="">BATUNUNGGAL</option>

                                <option value="">MENGGER</option>
                            </optgroup>
                            <optgroup label="BUAH BATU">
                                <option value="">BUAH BATU</option>
                            </optgroup>
                            <optgroup label="KIARACONDONG">
                                <option value="">KIARACONDONG</option>

                                <option value="">CICAHEUM</option>
                            </optgroup>
                            <optgroup label="COBLONG">
                                <option value="">CIPAGANTI</option>

                                <option value="">DAGO</option>
                            </optgroup>
                            <optgroup label="BEKASI">
                                <option value="">BEKASI</option>
                            </optgroup>
                            <optgroup label="JAKARTA PUSAT">
                                <option value="">GAMBIR</option>
                                <option value="">SENEN</option>
                                <option value="">TANAH ABANG</option>
                                <option value="">MENTENG</option>
                            </optgroup>
                            <optgroup label="JAKARTA UTARA">
                                <option value="">KELAPA GADING</option>

                                <option value="">ANCOL</option>

                                <option value="">TANJUNG PRIUK</option>
                            </optgroup>
                            <optgroup label="JAKARTA TIMUR">
                                <option value="">DUREN SAWIT</option>

                                <option value="">PONDOK KOPI</option>

                                <option value="">KRAMAT JATI</option>

                                <option value="">JATINEGARA</option>

                                <option value="">PULO GADUNG</option>
                            </optgroup>
                            <optgroup label="JAKARTA BARAT">
                                <option value="">CENGKARENG</option>

                                <option value="">KEBON JERUK</option>

                                <option value="">GROGOL</option>

                                <option value="">PALMERAH</option>
                            </optgroup>
                            <optgroup label="JAKARTA SELATAN">
                                <option value="">CILANDAK</option>

                                <option value="">KEBAYORAN BARU</option>

                                <option value="">MAMPANG</option>

                                <option value="">PANCORAN</option>

                                <option value="">TEBET</option>
                            </optgroup>
                        </select>

                    </div>

                    <div class="input-group my-2">
                        <span id="date2" class="input-group-text"><i class="fa fa-calendar fa-lg" aria-hidden="true"></i></span>
                        <input type="date" name="tanggal" aria-describedby="date2" class="form-control">
                    </div>

                    <div class="input-group my-2">
                        <label class="input-group-text" for="adult2">
                            <i class="fa fa-male fa-lg" aria-hidden="true"></i>
                        </label>
                        <select name="adult" id="adult2" class="form-select" tabindex="-1"
                            aria-hidden="true">
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
                        <label class="input-group-text" for="adult2">
                            <i class="fa fa-child fa-lg" aria-hidden="true"></i>
                        </label>
                        <select name="infant" id="infant2" class="form-select" tabindex="-1"
                            aria-hidden="true">
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
                        <label class="input-group-text" for="adult2">
                            <i class="fa fa-bus fa-lg" aria-hidden="true"></i>
                        </label>
                        <select name="infant" id="infant2" class="form-select" tabindex="-1"
                            aria-hidden="true">
                            <optgroup label="Kelas Kursi">
                                <option selected="selected" value="">Reguler</option>
                                <option value="">VIP</option>
                            </optgroup>
                        </select>

                    </div>

                    <div class=" my-4 text-center">
                        <button class="btn btn-primary">Pesan &amp; Cari BIS</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Second Half -->
        <div class="col-md-8 p-0 bg-right h-md-100 loginarea">
            <header class="p-3 pb-0">
                <div class="container">
                    <div
                        class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3">
                        <div class="col-md-6 text-left">
                            <p class="my-0 mx-1">Hi,<b> Artur</b></p>
                        </div>
                        <div class="col-md-6 text-end">
                            <button type="button" class="btn btn-outline-primary">My Ticket</button>
                            <button type="button" class="btn btn-danger">Logout</button>
                        </div>
                    </div>
                </div>
            </header>

            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('/img/car1.jpg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/img/car2.jpg') }}" class="d-block w-100" alt="car2.jpg">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/img/car2.jpg') }}" class="d-block w-100" alt="car2.jpg">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>

</html>