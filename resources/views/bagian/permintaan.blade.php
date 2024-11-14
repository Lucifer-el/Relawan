<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/permintaan.css') }}">
</head>
<body>
    <div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif

<div class="container">
    <div class="content">
        <div class="login-box">
        <h2>Form Permintaan Obat</h2>
            <form action="{{ route('permintaan-obat.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_obat">Nama Obat</label>
                    <select name="nama_obat" id="nama_obat" class="form-control" required>
                        @foreach($obats as $obat)
                            <option value="{{ $obat->id_obat }}">{{ $obat->nama_obat }} (Stok: {{ $obat->stok }})</option>
                        @endforeach
                    </select>
                </div>
    <!-- Formspree integration -->
    <form action="https://formspree.io/f/xanyeqvw" method="POST">
        <!-- Remove @csrf for Formspree -->

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="kelas">Kelas</label>
            <input type="text" name="kelas" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="nama_obat">Nama Obat</label>
            <select name="nama_obat" id="nama_obat" class="form-control" required onchange="updateObatName()">
                @foreach($obats as $obat)
                    <option value="{{ $obat->id_obat }}" data-name="{{ $obat->nama_obat }}">
                        {{ $obat->nama_obat }} (Stok: {{ $obat->stok }})
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Hidden field for the medicine name to send the actual name instead of ID -->
        <input type="hidden" name="nama_obat_text" id="nama_obat_text">

        <div class="form-group">
            <label for="jumlah">Jumlah Permintaan</label>
            <input type="number" name="jumlah" class="form-control" required>
        </div>

        <!-- Adding recipient email for Formspree -->
        <input type="hidden" name="_replyto" value="your-email@example.com">

        <button type="submit" class="btn btn-primary mt-3">Kirim Permintaan</button>
        
        <button type="button" class="btn btn-secondary mt-3" onclick="window.location='{{ url()->previous() }}'">Kembali</button> <!-- Kembali Button -->
    </form>
</div>

<!-- JavaScript to update the hidden field with the selected medicine name -->
<script>
    function updateObatName() {
        const obatSelect = document.getElementById('nama_obat');
        const selectedOption = obatSelect.options[obatSelect.selectedIndex];
        const obatName = selectedOption.getAttribute('data-name');
        document.getElementById('nama_obat_text').value = obatName;
    }

    // Initialize the hidden field with the default selected option
    window.onload = updateObatName;
</script>

<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.content .login-box {
    background-color: #fff;
    padding: 60px;
    border-radius: 15px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
    text-align: center;
    width: 600px;
    border: 1px solid rgba(0, 0, 0, 0.1);
}

</style>
</body>
</html>
