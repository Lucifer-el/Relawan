<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Obat Relawan Neskar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="card">
                <h4 class="text-center">Data Obat Relawan Neskar</h4>
                <!-- Form Pencarian -->
                <form action="{{ route('obat.index') }}" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="search" value="{{ $search }}" placeholder="Search obat...">
                        <button class="btn btn-danger" type="submit">Cari</button>
                    </div>
                </form>

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama Obat</th>
                                <th>Stok</th>
                                <th>Jenis Obat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($obats->isNotEmpty())
                                @foreach($obats as $obat)
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
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" class="text-center">Tidak ada data obat.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>

                    <button class="btn btn-danger" onclick="window.location.href='{{ url('/home') }}'">Kembali</button>
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
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

</body>
<style>
    body {
    background-image: url('{{ asset('images/relawan.jpg') }}');
    font-family: Arial, sans-serif;
    background-size: cover;
    background-position: center;
    width: 100%;
    height: 100%;
    z-index: -1;  /* Di belakang form login */
    display: flex;
    justify-content: center;
    align-items: center;
}

.card{
    width: 100%;
    max-width: 900px;
    margin: 150px auto;
    padding: 40px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.8);
    border: 1px solid rgba(0, 0, 0, 0.1);
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
