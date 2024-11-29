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
            <div class="content">
                    <div class="card">
                        <div class="card-header text-center">
                            <b>Data Obat Relawan Neskar</b>
                            <form action="{{ route('obat.create') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success float-end">Tambah Obat</button>
                            </form>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                            <th>Nama Obat</th>
                                            <th>Stok</th>
                                            <th>Jenis Obat</th>
                                            <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                        @if($obats->isNotEmpty())
                                        @foreach ($obats as $obat)
                                        <tr>
                                            <td>
                                                <a href="#" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#obatModal" 
                                                   data-nama="{{ $obat->nama_obat }}"
                                                   data-definisi="{{ $obat->definisi }}"
                                                   data-kegunaan="{{ $obat->kegunaan }}">
                                                   {{ $obat->nama_obat }}
                                                </a>
                                            </td>
                                            <td>{{ $obat->stok }}</td>
                                            <td>{{ $obat->jenis_obat }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                <form action="{{ route('obat.edit', $obat->id_obat) }}" method="GET">
                                            @csrf
                                            @method('PUT') <!-- Menandakan bahwa ini adalah request PUT -->
                                            <button type="submit" class="btn btn-sm btn-primary">Edit</button>
</form>

</form>

</form>
                                                    <form action="{{ route('obat.destroy', $obat->id_obat) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-float btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                           <tr>
                                                <td colspan="3" class="text-center">Tidak ada data obat.</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                    
                                </table>
                            </div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Logout</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- Modal untuk menampilkan detail obat -->
    <div class="modal fade" id="obatModal" tabindex="-1" aria-labelledby="obatModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="obatModalLabel">Detail Obat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Definisi:</h6>
                    <p id="definisi"></p>
                    <h6>Kegunaan:</h6>
                    <p id="kegunaan"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

</body>

<style>

/* Pengaturan body agar posisi center */
body {
    background-image: url('{{ asset('images/wkwk.jpg') }}');
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
    height: 100vh;
}

.card{
    margin: auto;
    width: 80%;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.8);
    border: 2px solid rgba(0, 0, 0, 0.1);
}

.card-body {
    padding: 20px;
}

/* Styling untuk tabel */
.table th, .table td {
    text-align: center;
    vertical-align: middle;
}

.btn-group button {
    margin: 0 10px; /* Jarak antara tombol */
    display: flex;
    justify-content: center; /* Untuk memusatkan tombol */
    align-items: center; /* Untuk memastikan tombol sejajar secara vertikal */
}

.card-header{
    padding-top: 30px;
}
</style>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
<script>
    // JavaScript untuk mengisi modal dengan data obat yang diklik
    var obatModal = document.getElementById('obatModal');
    obatModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var namaObat = button.getAttribute('data-nama');
        var definisi = button.getAttribute('data-definisi');
        var kegunaan = button.getAttribute('data-kegunaan');

        var modalTitle = obatModal.querySelector('.modal-title');
        var modalDefinisi = obatModal.querySelector('#definisi');
        var modalKegunaan = obatModal.querySelector('#kegunaan');

        modalTitle.textContent = 'Detail Obat: ' + namaObat;
        modalDefinisi.textContent = definisi;
        modalKegunaan.textContent = kegunaan;
    });
</script>
</html>
