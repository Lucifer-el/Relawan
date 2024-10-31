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

    <h2>Form Permintaan Obat</h2>

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
