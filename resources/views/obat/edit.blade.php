
<h1>Edit Obat</h1>

<!-- Menampilkan pesan sukses jika ada -->
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<!-- Form untuk mengupdate obat -->
<form method="POST" action="{{ route('obat.update', $obat->id_obat) }}">
    @csrf
    @method('PUT') <!-- Menambahkan method PUT untuk update -->

    <div class="form-group">
        <label for="nama_obat">Nama Obat</label>
        <input type="text" class="form-control" id="nama_obat" name="nama_obat" value="{{ $obat->nama_obat }}" required>
    </div>

    <div class="form-group">
        <label for="stok">Stok</label>
        <input type="number" class="form-control" id="stok" name="stok" value="{{ $obat->stok }}" required>
    </div>

    <div class="form-group">
        <label for="jenis_obat">Jenis Obat</label>
        <input type="text" class="form-control" id="jenis_obat" name="jenis_obat" value="{{ $obat->jenis_obat }}" required>
    </div>

    <button type="submit"  class="btn btn-primary">Update</button>
</form>

<a href="{{ route('dashboard') }}">Kembali ke daftar obat</a>

