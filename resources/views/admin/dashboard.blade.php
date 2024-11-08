<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="overlay"></div>
        <div class="container">
            <div class="card">
                <div class="card-header" style="background-color: #dc3546">
                    <form action="{{ route('obat.create') }}" method="POST">
                        @csrf
                        Data Obat Relawan Neskar
                        <button type="submit" class="btn">Tambah Obat</button>
                    </form>
                </div>
                
                <div class="card-body">
                    <table class="table">
                        <th>id_obat</th>
                        <th>Nama Obat</th>
                        <th>Stok</th>
                        <th>Jenis Obat</th>
                        <th></th>
                        <tbody>
                            @foreach ($obats as $obat)
                            <tr>
                                <td>{{ $obat->id_obat }}</td>
                                <td>{{ $obat->nama_obat }}</td>
                                <td>{{ $obat->stok }}</td>
                                <td>{{ $obat->jenis_obat }}</td>
                                <td>
                                    <a href="{{ route('obat.edit', $obat->id_obat) }}">
                                        <button type="button" class="btn btn-sm btn-float btn-danger">Edit</button>
                                    </a>
                                    <form action="{{ route('obat.destroy', $obat->id_obat) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-float btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </div>
            </div>
        </div>
</body>

<style>
.overlay {
    background-image: url('{{ asset('images/wkwk.jpg') }}');
    background-size: cover;
    background-position: center;
    position: fixed;  /* Agar background mengikuti seluruh layar */
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;  /* Di belakang form login */
}

/* Pengaturan body agar posisi center */
body {
    font-family: 'Arial', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>
</html>
