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
                <h2>Welcome to Relawan Neskar!</h2>
                <div class="button-container">
                    <form action="{{ route('home') }}" method="GET">
                        @csrf
                        <button type="submit" class="btn-login">Home</button>
                    </form>
                    <form action="{{ route('login') }}" method="GET">
                        @csrf
                        <button type="submit" class="btn-register">Login</button>
                    </form>
                </div>
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
    background-color: rgba(255 , 0, 0, 0.5); /* Transparansi latar belakang untuk konten di atas gambar */
}

/* Container untuk login */


/* Box login */
.login-box {
    background-color: #fff;
    padding: 60px;
    border-radius: 15px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
    text-align: center;
    width: 600px;
    border: 1px solid rgba(0, 0, 0, 0.1);
}

/* Pengaturan teks */
h2 {
    font-size: 2.0em;
    color: #fe0000;
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

.button-container {
    display: flex;
    justify-content: center; /* Untuk memusatkan tombol */
    align-items: center; /* Untuk memastikan tombol sejajar secara vertikal */
    margin-top: 50px; /* Tambahkan margin atas sesuai kebutuhan */
}

/* Tombol login */
.btn-login, .btn-register {
    padding: 15px 40px;
    background-color: #ff7070;
    color: white;
    border: none;
    border-radius: 32px;
    font-size: 20px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s;
    margin: 0 10px; /* Jarak antara tombol */
}

.btn-login:hover, .btn-register:hover {
    background-color: #fe0000;
}/* Placeholder styling */
::placeholder {
    color: #dcdde1;
    opacity: 1;
}


</style>

</html>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if ($message = Session::get('failed'))
    <script>Swal.fire("{{$message}}");</script>
@endif