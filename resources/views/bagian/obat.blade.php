<div class="jasa-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal">
                <img src="{{ asset('public/images/img/close-icon.svg') }}" />
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Data Obat</h2>
                            <p class="item-intro text-muted">Cek obat-obatan disini!</p>
                            <img class="img-fluid d-block mx-auto"
                                src="{{ asset('public/images/img/portfolio/Obat1.jpg') }}" />
                            <!-- Tabel Obat -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nama Obat</th>
                                        <th>Jenis Obat</th>
                                        <th>Stok</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($obats->isNotEmpty())
                                        @foreach($obats as $obat)
                                            <tr>
                                                <td>{{ $obat->nama_obat }}</td>
                                                <td>{{ $obat->jenis_obat }}</td>
                                                <td>{{ $obat->stok }}</td>
                                                <td>
                                                    @can('update-obat', $obat)
                                                        <button
                                                            onclick="window.location.href='{{ route('obat.edit', $obat->id_obat) }}'">Edit</button>
                                                        <form action="{{ route('obat.destroy', $obat->id_obat) }}" method="POST"
                                                            style="display:inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit">Delete</button>
                                                        </form>
                                                    @endcan
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4" class="text-center">Tidak ada data obat.</td>
                                        </tr>
                                    @endif
                                </tbody>
                                <button class="btn btn-primary btn-xl text-uppercase"
                                    onclick="window.location.href='{{ url('/') }}'" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Kembali
                                </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>