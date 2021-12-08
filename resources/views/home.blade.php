@extends('/layouts.home')
@section('container')
    <!-- Header -->
    <div class="header pt-5 pb-7 mt-5" style="background-image: url('{{ template('assets/img/bg.png') }}') !important;">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="pr-5">
                            <h1 class="display-2 text-white font-weight-bold mb-0">Unit Kegiatan Mahasiswa</h1>
                            <h2 class="display-4 text-white font-weight-light">Fakultas Teknik - Universitas Negeri
                                Jakarta</h2>
                            <p class="text-white mt-4">Kembangkan minat dan bakat yang kamu miliki sekarang juga!,
                                melalui website ini kamu dapat menggali potensi yang ada didalam diri kamu.</p>
                            <div class="mt-5">
                                <a href="#details" class="btn btn-neutral my-2">Lihat Lebih
                                    Lanjut</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="row pt-5">
                            <div class="col-md-6">
                                <div class="card">
                                    <img class="card-img-top" src="{{ template('assets/img/home/batavia.jpeg') }}"
                                        alt="Image placeholder">
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="{{ template('assets/img/home/robotic.jpeg') }}"
                                        alt="Image placeholder">
                                </div>
                            </div>
                            <div class="col-md-6 pt-lg-7 pt-5">
                                <div class="card mb-4">
                                    <img class="card-img-top" src="../../assets/img/theme/img-1-1000x900.jpg"
                                        alt="Image placeholder">
                                </div>
                                <div class="card mb-4">
                                    <img class="card-img-top" src="../../assets/img/theme/img-1-1000x900.jpg"
                                        alt="Image placeholder">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <section class="py-6 pb-9 pt-5 bg-default" id="details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-4">
                            <img class="card-img-top" src="../../assets/img/theme/img-1-1000x900.jpg"
                                alt="Image placeholder">
                            <div class="card card-lift--hover shadow border-0 d-flex">
                                <div class="card-body mt--5">
                                    <img src="../../assets/img/theme/team-1.jpg"
                                        class="rounded-circle img-center img-fluid shadow shadow-lg--hover mt--5"
                                        style="width: 140px;">
                                    <h4 class="h3 text-primary text-uppercase text-center mt-3">Tentang Website UKM FT</h4>
                                    <p class="description mt-3">Argon is built on top of the most popular open source
                                        toolkit for developing with HTML, CSS, and JS.</p>
                                    <div class="d-flex">
                                        <a href="{{ route('abouts') }}" class="btn btn-primary mx-auto"
                                            style="border-radius: 50px;">Lihat Lebih
                                            Lanjut</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <img class="card-img-top" src="../../assets/img/theme/img-1-1000x900.jpg"
                                alt="Image placeholder">
                            <div class="card card-lift--hover shadow border-0">
                                <div class="card-body mt--5">
                                    <img src="../../assets/img/theme/team-1.jpg"
                                        class="rounded-circle img-center img-fluid shadow shadow-lg--hover mt--5"
                                        style="width: 140px;">
                                    <h4 class="h3 text-success text-uppercase text-center mt-3">Macam - Macam UKM FT</h4>
                                    <p class="description mt-3">Use Argons's included npm and gulp scripts to compile
                                        source code, run
                                        tests, and more with just a few simple commands.</p>
                                    <div class="d-flex">
                                        <a href="{{ route('listUKM') }}" class="btn btn-success mx-auto"
                                            style="border-radius: 50px;">Lihat Lebih
                                            Lanjut</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <img class="card-img-top" src="../../assets/img/theme/img-1-1000x900.jpg"
                                alt="Image placeholder">
                            <div class="card card-lift--hover shadow border-0">
                                <div class="card-body mt--5">
                                    <img src="../../assets/img/theme/team-1.jpg"
                                        class="rounded-circle img-center img-fluid shadow shadow-lg--hover mt--5"
                                        style="width: 140px;">
                                    <h4 class="h3 text-warning text-uppercase text-center mt-3">Contact Person UKM FT</h4>
                                    <p class="description mt-3">Argon makes customization easier than ever before. You
                                        get all the
                                        tools to make your website building process a breeze.</p>
                                    <div class="d-flex">
                                        <a href="" class="btn btn-warning mx-auto" style="border-radius: 50px;">Lihat Lebih
                                            Lanjut</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
