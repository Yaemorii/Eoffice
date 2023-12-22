<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/Banjarbaru.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="login.css">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <title>Login Form</title>
</head>
<body>
    <form action="{{ url('/login') }}" method="post">
        @csrf
        <div class="login-container">
            <div class="logo-container">
                <h3><p>Pemerintah Kota Banjarbaru</p></h3>
                <h4><p>Dinas Komunikasi dan Informatika Kota Banjarbaru</p></h4>
                <img src="img/Banjarbaru.png" alt="Logo" class="logo">
            </div>
            <div class="form-container">
                <h2 class="form-title">Login</h2>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="user" id="username" name="username" placeholder="Masukkan Username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="pass" name="password" placeholder="Masukkan Password">
                </div>
                
                <button id="loginBtn" class="btn text-white" type="submit" value="Login">Login</button>
                <!-- Tombol Forgot Password -->
                <div class="forgot-password">
                    <a href="{{ url('/forgot-password') }}">Lupa Password?</a>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
