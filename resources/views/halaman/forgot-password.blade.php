<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="forgot.css">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <title>Lupa Password</title>
</head>
<body>
    <form action="{{ url('/forgot-password') }}" method="post">
        @csrf
        <div class="login-container">
            <div class="logo-container">
                <h3>Pemerintah Kota Banjarbaru</h3>
                <h4>Dinas Komunikasi dan Informatika Kota Banjarbaru</h4>
                <img src="img/Banjarbaru.png" alt="Logo" class="logo">
            </div>
            <div class="form-container">
                <h2 class="form-title">Forgot Password</h2>
                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input type="text" id="nip" name="nip" placeholder="Masukkan NIP">
                </div>
                <div class="form-group">
                    <label for="password">Password Baru</label>
                    <input type="password" id="password" name="password" placeholder="Password Baru (minimal 3 karakter)">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Konfirmasi Password Baru</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Password Baru">
                </div>
                
                <button id="forgotBtn" class="btn text-white" type="submit" value="Simpan">Simpan</button>
                <!-- Tambahan: Link kembali ke halaman login -->
                <div class="forgot-password">
                    <a href="{{ url('/login') }}">Kembali ke Login</a>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
