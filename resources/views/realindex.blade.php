<head>
    @include('bagian.master') 

</head>

<body>
    @include('bagian.navbar')
    <section id="page-top">
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Relawan Neskar!</div>
                <div class="masthead-heading text-uppercase">Palang Merah Indonesia Jaya! Jaya! jaya!</div>
            </div>
        </header>
    </section>

    <section class="page-section bg-light" id="jasa">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Jasa</h2>
            <h3 class="section-subheading text-muted">Berikut adalah beberapa jasa kami!</h3>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-4 col-sm-6 mb-4 mx-2"> <!-- Add mx-2 for horizontal margin -->
                <div class="jasa-item">
                    <a href="{{ route('obat.index') }}" class="jasa-link">
                        <div class="jasa-hover">
                            <div class="jasa-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                                <span class="hover-text">Lihat Detail</span>
                            </div>
                        </div>
                        <img src="{{ asset('images/img/portfolio/Obat1.jpg') }}" alt="Dimas" style="width: 295px; height: auto;" />
                    </a>
                    <div class="jasa-caption">
                        <div class="jasa-caption-heading">Data Obat</div>
                        <div class="jasa-caption-subheading text-muted">Cek obat-obatan disini!</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-4 mx-2"> <!-- Add mx-2 for horizontal margin -->
                <div class="jasa-item">
                    <a href="{{ route('permintaan-obat.create') }}" class="jasa-link">
                        <div class="jasa-hover">
                            <div class="jasa-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                                <span class="hover-text">Isi Form Permintaan</span>
                            </div>
                        </div>
                        <img src="{{ asset('images/img/portfolio/Forms.jpg') }}" alt="Dimas" style="width: 295px; height: auto;" />
                    </a>
                    <div class="jasa-caption">
                        <div class="jasa-caption-heading">Form Permintaan Obat</div>
                        <div class="jasa-caption-subheading text-muted">Isi data dirimu ya!</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <body>
        @include('bagian.member')
    </body>

    <body>
        @include('bagian.footer')
    </body>
</body>