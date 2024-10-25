<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Obat</title>
</head>
<body>
    <h1>Tambah Obat</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('obat.store') }}">
    @csrf

    <label for="nama_obat">Nama Obat:</label>
    <input type="text" id="nama_obat" name="nama_obat">

    <label for="stok">Stok:</label>
    <input type="number" id="stok" name="stok">

    <label for="jenis_obat">Jenis Obat:</label>
    <input type="text" id="jenis_obat" name="jenis_obat">

    <button type="submit">Tambah Obat</button>
</form>

</body>
</html>
