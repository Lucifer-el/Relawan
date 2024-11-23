<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Permintaan Obat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/permintaan.css') }}">
    <style>
        .b{
            background: linear-gradient(#FA8B8B, #FC2222);  /* Soft gradient from blue to pink */
        }


        body {
            background-image: url('{{ asset('images/wkwk.jpg') }}');
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
            max-width: 500px;
            margin: 100px auto;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.8);
            border: 1px solid rgba(0, 0, 0, 0.1);
        }


    </style>
</head>
<body>

<div class="container">    
    <div class="content">
        <div class="card">
                <b>Form Permintaan Obat</b>
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

            <div class="card-body">
                <form action="{{ route('permintaan-obat.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="kelas">Kelas</label>
                        <input type="text" name="kelas" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" name="jurusan" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="nama_obat">Nama Obat</label>
                        <select name="nama_obat" id="nama_obat" class="form-control" required onchange="updateObatName()">
                            @foreach($obats as $obat)
                                <option value="{{ $obat->id_obat }}" data-name="{{ $obat->nama_obat }}">
                                    {{ $obat->nama_obat }} (Stok: {{ $obat->stok }})
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Hidden field for the medicine name -->
                    <input type="hidden" name="nama_obat_text" id="nama_obat_text">

                    <div class="mb-3">
                        <label for="jumlah">Jumlah Permintaan</label>
                        <input type="number" name="jumlah" class="form-control" required>
                    </div>

                    <input type="hidden" name="_replyto" value="@example.com">

                    <button type="submit" class="btn btn-danger">Kirim Permintaan</button>
                    <button type="button" class="btn btn-primary" onclick="window.location='{{ route('home') }}'">Kembali</button>
                </form>            
            </div>
        </div>
    </div>
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

</body>
</html>
