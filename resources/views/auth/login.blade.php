<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <div class="overlay"></div> <!-- Overlay yang menjadi background gambar -->
    <div class="content">
        <div class="login-container">
            <div class="login-box">
                <h2>Welcome!</h2>
                <form action="{{ route('login-proses') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <label for="username">
                            <i class="fa fa-user"></i>
                        </label>
                        <input type="text" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div class="input-group">
                        <label for="password">
                            <i class="fa fa-lock"></i>
                        </label>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>

                    <button type="submit" class="btn-login">LOGIN</button>
                </form>
            </div>
        </div>
    </div>
</body>

<style>
    /* Style dasar untuk semua elemen */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Overlay untuk gambar background */
.overlay {
    background-image: url('{{ asset('images/Diklat.JPG') }}');
    background-size: cover;
    background-position: center;
    position: fixed;  /* Agar background mengikuti seluruh layar */
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;  /* Di belakang form login */
    opacity: 0.1;
}

/* Pengaturan body agar posisi center */
body {
    font-family: 'Arial', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.5); /* Transparansi latar belakang untuk konten di atas gambar */
}

/* Container untuk login */
.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    z-index: 1; /* Di atas background */
}

/* Box login */
.login-box {
    background-color: #fff;
    padding: 50px;
    border-radius: 15px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 400px;
    border: 1px solid rgba(0, 0, 0, 0.1);
}

/* Pengaturan teks */
h2 {
    font-size: 2.2em;
    color: #2f3640;
    margin-bottom: 40px;
    font-weight: bold;
    letter-spacing: 1px;
}

/* Input field */
.input-group {
    margin-bottom: 20px;
    position: relative;
}

.input-group input {
    width: 100%;
    padding: 15px;
    border: none;
    border-radius: 10px;
    background-color: #353b48;
    color: #fff;
    font-size: 1.1em;
    outline: none;
    font-weight: 500;
    box-shadow: inset 0 1px 4px rgba(0, 0, 0, 0.1);
}

/* Tombol login */
.btn-login {
    top: 26cap;
    left: 35cap;
    width: 100%;
    padding: 15px;
    background-color: #596275;
    border: none;
    border-radius: 10px;
    font-size: 1.2em;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
    font-weight: bold;
    text-transform: uppercase;
}

.btn-login:hover {
    background-color: #404a59;
}

/* Placeholder styling */
::placeholder {
    color: #dcdde1;
    opacity: 1;
}

.btn-login {
  scale: 0.5;
  padding: 0 50px;
  width: 160px;
  height: 64px;
  background: black;
  color: white;
  border: none;
  border-radius: 32px;
  font-size: 20px;
  font-weight: bold;
  cursor: pointer;
  position: absolute;
  z-index: 1;
  overflow: hidden;
}

.btn-login:hover {
  color: black;
}

.btn-login:after {
  content: "";
  background: white;
  position: absolute;
  z-index: -1;
  left: -20%;
  right: -20%;
  top: 0;
  bottom: 0;
  transform: skewX(-45deg) scale(0, 1);
  transition: all 0.5s;
}

.btn-login:hover:after {
  transform: skewX(-45deg) scale(1, 1);
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}
</style>

</html>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if ($message = Session::get('failed'))
    <script>Swal.fire("{{$message}}");</script>
@endif