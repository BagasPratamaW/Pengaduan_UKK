<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="{{ asset('images/icon.svg') }}" type="image/png">
    {{-- ================================================================ --}}
    <link rel="stylesheet" href="{{ asset('css/adminlog.css') }}">
    {{-- ================================================================ --}}
    <link rel="stylesheet" href="{{ asset('css/util.css') }}">
    {{-- ================================================================ --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    {{-- ================================================================ --}}
    
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.css') }}">
    {{-- ================================================================ --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('animate/animate.css') }}">
    {{-- ================================================================ --}}
    
    {{-- ================================================================ --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    {{-- ================================================================ --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Halaman Masuk Petugas</title>
</head>

<body>
    {{-- =================================================================================================== --}}

    <div class="limiter">
        <div class="container-login100 mb-5">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('images/hero-admin.png') }}" alt="IMG">
                </div>

                <form action="{{ route('admin.login') }}" method="POST">
                @csrf  
                    <span class="login100-form-title">
                        Petugas Login
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Unvalid Username">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
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

    <!--===============================================================================================-->
    <script src="{{ asset('jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('tilt/tilt.jquery.min.js') }}"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{-- =================================================================================================== --}}

</body>

</html>