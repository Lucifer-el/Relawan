<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="card">
                <div class="card-header text-center">
                    <b>Edit Obat</b>
                </div>
                <!-- Menampilkan pesan sukses jika ada -->
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <!-- Form untuk mengupdate obat -->
                <div class="card-body">
                    <form method="POST" action="{{ route('obat.update', $obat->id_obat) }}">
                        @csrf
                        @method('PUT') <!-- Menambahkan method PUT untuk update -->

                        <div class="mb-3">
                            <label for="nama_obat" class="form-label">Nama Obat</label>
                            <input type="text" name="nama_obat" value="{{ $obat->nama_obat }}" class="form-control" id="nama_obat" required>
                        </div>

                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok</label>
                            <input type="number" name="stok" value="{{ $obat->stok }}" class="form-control" id="stok" required>
                        </div>

                        <div class="mb-3">
                            <label for="jenis_obat" class="form-label">Jenis Obat</label>
                            <select class="form-control" id="jenis_obat" name="jenis_obat" required>
                                <option value="" disabled>Pilih jenis obat</option>
                                <option value="Obat Batuk" {{ $obat->jenis_obat == 'Obat Batuk' ? 'selected' : '' }}>Obat Batuk</option>
                                <option value="Obat Pusing" {{ $obat->jenis_obat == 'Obat Pusing' ? 'selected' : '' }}>Obat Pusing</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="definisi" class="form-label">Definisi Obat</label>
                            <input type="text" name="definisi" value="{{ $obat->definisi }}" class="form-control" id="definisi" required>
                            @error('definisi')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <!-- Input Kegunaan Obat -->
                        <div class="mb-3">
                            <label for="kegunaan" class="form-label">Kegunaan Obat</label>
                            <input type="text" name="kegunaan" value="{{ $obat->kegunaan }}" class="form-control" id="kegunaan" required>
                            @error('kegunaan')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Menambahkan margin-top pada tombol -->
                        <button type="submit" class="btn btn-danger">Update</button>
                        <a href="{{ route('dashboard') }}" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<style>
body {
    background-image: url('{{ asset('images/wkwk.jpg') }}');
    background-size: cover;
    background-position: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    font-family: 'Arial', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
}

.card {
    width: 100%;
    max-width: 500px; /* Membatasi lebar card agar tidak terlalu lebar */
    margin: auto;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.8);
    border: 1px solid rgba(0, 0, 0, 0.1);
}
</style>
</html>
