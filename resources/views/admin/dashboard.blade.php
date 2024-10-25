<h1>Welcome to Admin Dashboard</h1>

<a href="{{ route('obat.create') }}">
    <button type="button">Add</button>
</a>

<h2>Daftar Obat</h2>
<table>
    <thead>
        <tr>
            <th>Nama Obat</th>
            <th>Stok</th>
            <th>Jenis Obat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($obats as $obat)
        <tr>
            <td>{{ $obat->nama_obat }}</td>
            <td>{{ $obat->stok }}</td>
            <td>{{ $obat->jenis_obat }}</td>
            <td>
                <a href="{{ route('obat.edit', $obat->id_obat) }}">
                    <button type="button">Edit</button>
                </a>
                
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
