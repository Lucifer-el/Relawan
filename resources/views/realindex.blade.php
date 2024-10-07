
<head>
   @include('bagian.master')
</head>
<body>
    @include('bagian.navbar')
    <section>
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
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="jasa-item">
                            <a class="jasa-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="jasa-hover">
                                    <div class="jasa-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid"  rel="stylesheet" href="{{ asset('public/images/img/portfolio/Obat1.jpg') }}" />
                            </a>
                            <div class="jasa-caption">
                                <div class="jasa-caption-heading">Data Obat</div>
                                <div class="jasa-caption-subheading text-muted">Cek obat-obatan disini!</div>
                                @include('bagian.obat')
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="jasa-item">
                            <a class="jasa-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="jasa-hover">
                                    <div class="jasa-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid"  rel="stylesheet" href="{{ asset('public/images/img/portfolio/Forms.jpg') }}" />
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