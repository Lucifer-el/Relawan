<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="card">
                <div class="card-header text-center">
                    Data Obat Relawan Neskar
                </div>                        
                @if (session('success'))
                    <div>{{ session('success')}}</div>
                @endif
                <div class="card-body">
                    <table class="table">
                        <th>id_obat</th>
                        <th>nama_obat</th>
                        <th>stok</th>
                        <th>jenis_obat</th>
                        <tbody>
                        @if($obats->isNotEmpty())
                            @foreach($obats as $obat)
                                <tr>
                                    <td>{{ $obat->id_obat }}</td>
                                    <td>{{ $obat->nama_obat }}</td>
                                    <td>{{ $obat->stok }}</td>
                                    <td>{{ $obat->jenis_obat }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4" class="text-center">Tidak ada data obat.</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                    <button class="btn btn-primary btn-xl text-uppercase"
                        onclick="window.location.href='{{ url('/home') }}'" type="button">
                        <i class="fas fa-xmark me-1"></i>
                        Kembali
                    </button>
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

.card{
    margin: auto;
    width: 80%;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.8);
    border: 1px solid rgba(0, 0, 0, 0.1);
}
</style>
</html>