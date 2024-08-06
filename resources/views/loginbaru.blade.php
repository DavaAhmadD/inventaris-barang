<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CV.OgahRugi | Login</title>
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="row d-flex flex-wrap-reverse justify-content-center align-items-center min-vh-100">
                <div class="col-12 card p-4 col-sm-12 col-md-5 col-lg-5 col-xl-5 d-flex flex-column justify-content-center align-items-center px-5">
                    <div class="row d-flex justify-content-center">
                        <h4 class="fw-bold text-center">CV. OgahRugi</h4>
                        <p class="fw-medium text-center mt-1">LOGIN</p>
                        <div class="d-flex flex-column gap-3 justify-content-start">
                            <label for="email" class="form-label">{{ __('Email') }}</label>
                            <div class="form-control">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email anda" value="{{old('email')}}" required autofocus autocomplete="email">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <div class="form-control">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password anda" required autocomplete="current-password">
                                <x-input-error :messages="$errors->get('password')" class="text-danger list-group-item list-none" />
                            </div>
                            <!-- Remember Me -->
                            <div class="block">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                            <button type="submit" class="tombolLogin text-decoration-none text-center rounded py-2">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- bootstrap js -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
