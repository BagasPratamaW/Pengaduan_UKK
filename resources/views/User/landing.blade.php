@extends('layouts.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
<link rel="stylesheet" href="{{ asset('css/modal.css') }}">
<link rel="stylesheet" href="{{ asset('exten/css/style.css') }}">

<style>
    .form-l {
        padding-top: 155px;
    }
    a:not([href]):not([tabindex]) {
        color: #fff;
    }
</style>

@endsection

@section('title', 'PENGWAR ー Pengaduan Warga')

@section('content')
<!--====== PRELOADER PART START ======-->

<div class="preloader">
    <div class="loader">
        <div class="ytp-spinner">
            <div class="ytp-spinner-container">
                <div class="ytp-spinner-rotator">
                    <div class="ytp-spinner-left">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                    <div class="ytp-spinner-right">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PRELOADER PART ENDS ======-->

<!--====== HEADER PART START ======-->

<header>
    <div class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="{{ route('pengwar.index') }}">
                            <img src="{{ asset('exten/images/logo.svg') }}" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarNav">
                            @if(Auth::guard('masyarakat')->check())
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="page-scroll nav-link ml-3 "
                                        href="{{ route('pengwar.laporan') }}">Laporan</a>
                                </li>

                                <li class="nav-item">
                                    <a class="page-scroll nav-link ml-3"
                                        style="text-decoration: underline">{{ Auth::guard('masyarakat')->user()->nama }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll nav-link ml-3 "
                                        href="{{ route('pengwar.logout') }}">Logout</a>
                                </li>
                            </ul>
                            @else
                            <ul id="nav" class="navbar-nav ml-auto">        
                                <li class="nav-item" >
                                    <a class="page-scroll" data-toggle="modal" data-target="#loginModal">LOGIN</a>
                                </li>

                                <li class="nav-item">
                                    <a class="page-scroll" href="{{ route('pengwar.formRegister') }}">DAFTAR</a>
                                </li>
                            </ul>
                            @endauth
                        </div> <!-- navbar collapse -->

                    </nav> <!-- navbar -->
                </div>
            </div>
        </div>
    </div>

    <div id="home" class="header-hero bg_cover"
        style="background-image: url({{ asset('exten/images/banner-bg.svg') }})">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="header-hero-content text-center">
                        <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Layanan
                            Pengaduan Warga</h3>
                        <p class="text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">Laporakan Keluhan
                            Anda Ke Kami</p>
                        <a href="#lapor" class="main-btn wow fadeInUp" data-wow-duration="1.3s"
                            data-wow-delay="1.1s">Apa Pun Laporan Anda Akan Kami tangani</a>
                    </div> <!-- header hero content -->
                </div>
            </div>
            <div class="row">
                <!-- row -->
                <div class="col-lg-12">
                    <div class="header-hero-image text-center wow fadeIn" data-wow-duration="1.3s"
                        data-wow-delay="1.4s">
                        <img class="herogone" src="{{ asset('exten/images/nullhero.png') }}" alt="hero">
                    </div> <!-- header hero image -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div id="particles-1" class="particles"></div>
    </div> <!-- header hero -->
    <div id="lapor"></div>
</header>

<!--====== HEADER PART ENDS ======-->

<!--====== LAPORAN PART START ======-->

<section class="brand-area form-l">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12 col">
            <div class="content shadow">
                @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
                @endif

                @if (Session::has('pengaduan'))
                <div class="alert alert-{{ Session::get('type') }}">{{ Session::get('pengaduan') }}</div>
                @endif

                <div class="card mb-3 text-center">Tulis Laporan Anda Disini</div>
                <form action="{{ route('pengwar.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" value="{{ old('judul_laporan') }}" name="judul_laporan"
                            placeholder="Apa Judul Laporan mu?" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea name="isi_laporan" placeholder="Boleh jelaskan apa Laporan mu?" class="form-control"
                            rows="4">{{ old('isi_laporan') }}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ old('tgl_kejadian') }}" name="tgl_kejadian"
                            placeholder="Kapan Tanggal Kejadian Tersebut?" class="form-control"
                            onfocusin="(this.type='date')" onfocusout="(this.type='text')">
                    </div>
                    <div class="form-group">
                        <textarea name="lokasi_kejadian" id="latlang" rows="3" class="form-control mb-3"
                            placeholder="Boleh kamu beritahu lokasi Kejadianny?">{{ old('lokasi_kejadian') }}</textarea>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <select name="kategori_kejadian" class="custom-select" id="inputGroupSelect01" required>
                                <option value="" selected>Pilih Kategori Kejadian</option>
                                <option value="hukum">Hukum</option>
                                <option value="lingkungan">Lingkungan</option>
                                <option value="sosial">Sosial</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="file" name="foto" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-custom mt-2">Kirim</button>
                </form>
            </div>
        </div>
    </div><!-- container -->
</section>

<!--====== LAPORAN PART ENDS ======-->

<!--====== FOOTER PART START ======-->
<!-- footer widget -->
<div class="mt-5">
    <hr>
    <div class="text-center">
        <p class="italic text-secondary">© 2021 Bagas P. Created With <i style="color:#ff5555;" class="fa fa-heart"></i>
            • All rights reserved</p>
    </div>
</div> <!-- footer copyright -->
>
<!-- container -->
<div id="particles-2"></div>
</footer>

<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TOP TOP PART START ======-->

<a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

<!--====== BACK TOP TOP PART ENDS ======-->


<!--====== MODAL START ======-->

<div class="wrapper modal fade" id="loginerr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div>Login Terlebih Dahulu</div>
            </div>
        </div>
    </div>
</div>

<!--====== MODAL END ======-->

<!--====== NEW MODAL START ======-->

<div class="wrapper modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="title">Login Form</div>
                <form class="forms" action="{{ route('pengwar.login') }}" method="POST">
                    @csrf
                    <h3 class="mt-3 text-center">Mohon Login Terlebih dahulu</h3>
                    <div class="field">
                        <input type="text" type="text" name="username" id="username" required>
                        <label for="username">Username</label>
                    </div>
                    <div class="field">
                        <input type="password" type="password" name="password" id="password" required>
                        <label for="password">Password</label>
                    </div>
                    
                    <div class="field">
                        <input type="submit" value="Login">
                    </div>
                    <div class="signup-link">Belum Mendaftar? <a href="{{ route('pengwar.formRegister') }}">Daftar
                            Disini</a>
                    </div>
                </form>
                @if (Session::has('pesan'))
                <div class="alert alert-danger mt-2">
                    {{ Session::get('pesan') }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<!--====== NEW MODAL END ======-->

@endsection
<!--====== Jquery js ======-->
@section('js')
{{-- @if (!Auth::guard('masyarakat')->check())
<script>
    $('#loginerr').modal('show');
</script>
@endif --}}

<script src="{{ asset('exten/js/popper.min.js') }}"></script>
<script src="{{ asset('exten/js/main.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
    integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
</script>
@endsection