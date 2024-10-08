<head>
    @include('bagian.master') 
    <link rel="stylesheet" href="{{ asset('css/jawa.css') }}">
</head>

<body>
    @include('bagian.navbar')
    <section>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <style>
                    header.masthead {
                        padding-top: 10.5rem;
                        padding-bottom: 6rem;
                        text-align: center;
                        color: #d62828;
                        background-image: url("../images/Buwok.jpg");
                        /* Pastikan path relatif benar */
                        background-repeat: no-repeat;
                        background-attachment: scroll;
                        background-position: center center;
                        background-size: cover;
                    }
                </style>
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
        <a href="{{ route('kontol') }}" class="jasa-link">
            <div class="jasa-hover">
                <div class="jasa-hover-content">
                    <i class="fas fa-plus fa-3x"></i>
                    <span class="hover-text">Lihat Detail</span>
                </div>
            </div>
            <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDKE2xvoDstzjSE8c0DVavO3l6IKYv57hFEg&s" alt="Data Obat" />
        </a>
        <div class="jasa-caption">
            <div class="jasa-caption-heading">Data Obat</div>
            <div class="jasa-caption-subheading text-muted">Cek obat-obatan disini!</div>
        </div>
    </div>
</div>

<div class="col-lg-4 col-sm-6 mb-4">
    <div class="jasa-item">
        <a class="jasa-link" data-bs-toggle="modal" href="#portfolioModal2">
            <div class="jasa-hover">
                <div class="jasa-hover-content">
                    <i class="fas fa-plus fa-3x"></i>
                    <span class="hover-text">Isi Form</span>
                </div>
            </div>
            <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVY93C5Y4JzHz9o2uo2i7ULhwZnwbBnX44UA&s" alt="Form Permintaan Obat" />
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