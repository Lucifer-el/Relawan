<!-- Portfolio item 1 modal popup-->
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
                        
                            <table obats class=" table">
                                <thead>
                                    <tr>
                                        <th>Id_obat</th>
                                        <th>Nama Obat</th>
                                        <th>Stok</th>
                                    </tr>
                                </thead>
                            
                            </table>

                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
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