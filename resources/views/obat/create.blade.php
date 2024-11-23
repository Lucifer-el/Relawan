<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="card">
                <div class="card-header text-center">
                    <b>Tambah Obat</b>
                </div>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card-body">
                    <form action="{{ route('obat.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_obat" class="form-label">Nama Obat</label>
                            <input type="text" name="nama_obat" value="{{ old('nama_obat') }}" class="form-control" id="nama_obat" placeholder="Masukkan nama_obat">
                            @error('nama_obat')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok</label>
                            <input type="number" name="stok" value="{{ old('stok') }}" class="form-control" id="stok" placeholder="Masukkan stok">
                            @error('stok')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="jenis_obat" class="form-label">Jenis Obat</label>
                            <select id="jenis_obat" class="form-select" name="jenis_obat">
                                <option value="" disabled selected>Pilih jenis obat</option>
                                <option value="Obat Batuk">Obat Batuk</option>
                                <option value="Obat Pusing">Obat Pusing</option>
                            </select>
                            @error('jenis_obat')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-danger">Simpan</button>
                        <a href="{{ route('dashboard') }}" class="btn btn-primary">Kembali</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>
<style>
body {
    background-image: url('{{ asset('images/relawan.jpg') }}');
    background-size: cover;
    background-position: center;
    position: fixed;  /* Agar background mengikuti seluruh layar */
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;  /* Di belakang form login */
    font-family: 'Arial', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
}

.card{
    width: 100vh;
    margin: auto;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.8);
    border: 1px solid rgba(0, 0, 0, 0.1);
}
</style>
</html>