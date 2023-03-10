<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/app_logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.2.1-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/account.css') }}">
    <title>Daftar Hadir</title>
</head>
<body>
    <div class="page">
        <div class="container">
            <div class="col image-col">
                <img src="{{ asset('assets/login-image.png') }}" draggable="false"/>
                <div class="about">
                    <h5>Daftar Hadir</h5>
                    <p>Aplikasi pengelola presensi secara lebih cepat, efisien dan optimal dengan berbagai fitur lengkap!</p>
                </div>
            </div>
            <div class="col">
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-head">
                        <h5>Masuk Akun</h5>
                        <p>Selamat Datang di Daftar Hadir</p>
                    </div>
                    <div class="form-prompt">
                        <input type="text" name="name" placeholder="Username" value="{{ old('name') }}" autocomplete="off">
                        <input type="password" name="password" placeholder="Password">
                        <button class="evented-btn">Masuk</button>
                    </div>
                    <div class="form-footer">
                        <p>&copy;Daftar Hadir</p>
                    </div>
                </form>
                @if ($libur == true)
                    <div class="notif success new">
                        <i class="fa-solid fa-mug-hot"></i>
                        <span>Selamat {{ $event }}</span>
                    </div>
                @endif
                @error('name')
                <div class="notif new">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    {{ $message }}
                </div>
                @enderror
                @error('password')
                <div class="notif new">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    {{ $message }}
                </div>
                @enderror
                @if (session()->has('login_failed'))
                <div class="notif new">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    {{ session('login_failed') }}
                </div>
                @endif
            </div>
        </div>
    </div>
    <script src="{{ asset('js/account.js') }}"></script>
</body>
</html>