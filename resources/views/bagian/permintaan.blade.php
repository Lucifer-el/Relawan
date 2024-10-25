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

    <form action="{{ route('permintaan-obat.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_obat">Nama Obat</label>
            <select name="nama_obat" id="nama_obat" class="form-control" required>
                @foreach($obats as $obat)
                    <option value="{{ $obat->id_obat }}">{{ $obat->nama_obat }} (Stok: {{ $obat->stok }})</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="jumlah">Jumlah Permintaan</label>
            <input type="number" name="jumlah" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Kirim Permintaan</button>
    </form>
</div>
