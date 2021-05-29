<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('front/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('front/css/style.css')}}" rel="stylesheet">
    <title>Singo</title>
</head>
<body>
<!--nav-->
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{asset('front/assets/logo.svg')}}" alt="" width="128" height="46"
                 class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profil NGO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Berita</a>
                </li>
            </ul>
            <form class="ms-3 p-0">
                <button class="btn btn-primary" type="button">Masuk</button>
            </form>
        </div>
    </div>
  </nav>
<!--nav end-->

<!--banner-->
<section style="background-image: url(front/assets/images/bg_banner.png)" class="banner d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Sistem Informasi Non-Government Organization</h1>
                <p class="mt-5">SINGO dioperasikan oleh Pusat Fasilitasi Kerja Sama Kementrian Dalam Negeri Republik
                    Indonesia untuk
                    mendukung kolaborasi antara NGO dengan pemerintah dalam mendukung rencana pembangunan.</p>
            </div>
        </div>
    </div>
</section>
<!--end of banner-->

<!--Achievement-->
<section class="achievement mt-5">
    <div class="container">
        <div class="item">
            <h5>Rp 240 M</h5>
            <p class="mt-3">Komitmen Hibah</p>
        </div>
        <div class="item">
            <h5>Rp 192 M</h5>
            <p class="mt-3">Serapan</p>
        </div>
        <div class="item">
            <h5>30+</h5>
            <p class="mt-3">Mitra Asing</p>
        </div>
        <div class="item">
            <h5>25+</h5>
            <p class="mt-3">Wilayah Kerja</p>
        </div>
        <div class="item">
            <h5>70+</h5>
            <p class="mt-3">Tenaga Ahli</p>
        </div>
    </div>
</section>
<!--Achievement end-->


<!--profile-->
<section class="profile">
    <div class="container">
        <div class="row g-5">
            <div class="col description">
                <h4>
                    Non-Government Organization <br>
                    yang tergabung dalam SINGO
                </h4>
                <p class="mt-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <button class="btn btn-primary mt-3">Selengkapnya</button>
            </div>
            <div class="col images">
                <div class="grid-3">
                    <img src="{{asset('front/assets/profile/swiss.png')}}" alt="swiss">
                    <img src="{{asset('front/assets/profile/oisca.png')}}" alt="oisca">
                    <img src="{{asset('front/assets/profile/asb.png')}}" alt="asb">
                </div>

                <div class="grid-2 mt-3">
                    <img src="{{asset('front/assets/profile/ford.png')}}" alt="ford">
                    <img src="{{asset('front/assets/profile/islamic.png')}}" alt="islamic">
                </div>

                <div class="grid-3 mt-3">
                    <img src="{{asset('front/assets/profile/snv.png')}}" alt="snv">
                    <img src="{{asset('front/assets/profile/icco.png')}}" alt="icco">
                    <img src="{{asset('front/assets/profile/konard.png')}}" alt="konard">
                </div>

                <div class="grid-3 mt-3">
                    <img src="{{asset('front/assets/profile/winrock.png')}}" alt="winrock">
                    <img src="{{asset('front/assets/profile/plan.png')}}" alt="plan">
                    <img src="{{asset('front/assets/profile/rikolto.png')}}" alt="rikolto">
                </div>

            </div>
        </div>
        <div class="row row-about justify-content-center">
            <div class="col-md-6 about">
                <h5 class="text-center">Tentang Kami</h5>
                <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua</p>
            </div>
        </div>
        <div class="row row-cols-3 g-5 row-about2">
            <div class="col">
                <img src="{{asset('front/assets/profile/Illustration-Rencana.png')}}" alt="">
                <h5>Rencana Kerja Tahunan</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua</p>
            </div>
            <div class="col">
                <img src="{{asset('front/assets/profile/Illustration-Laporan.png')}}" alt="">
                <h5>Laporan Tahunan & Keuangan</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua</p>
            </div>
            <div class="col">
                <img src="{{asset('front/assets/profile/Illustration-Rekomendasi.png')}}" alt="">
                <h5>Rekomendasi Tenaga Asing</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua</p>
            </div>
            <div class="col">
                <img src="{{asset('front/assets/profile/Illustration-Pemberitahuan.png')}}" alt="">
                <h5>Pemberitahuan Tamu Asing</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua</p>
            </div>
            <div class="col">
                <img src="{{asset('front/assets/profile/Illustration-Pemberdayaan.png')}}" alt="">
                <h5>Pemberdayaan Mitra Lokal</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua</p>
            </div>
            <div class="col">
                <img src="{{asset('front/assets/profile/Illustration-Monitoring.png')}}" alt="">
                <h5>Monitoring Dan Evaluasi</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua</p>
            </div>
        </div>
        <div class="carousel-container">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('front/assets/profile/carousel1.png')}}" class="d-block w-100" alt="carousel image">
                        <div class="carousel-caption d-none d-md-block">
                            <p>Penandatanganan lorem ipsum pada saat dolor sit amet</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('front/assets/profile/carousel1.png')}}" class="d-block w-100" alt="carousel image">
                        <div class="carousel-caption d-none d-md-block">
                            <p>Penandatanganan lorem ipsum pada saat dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</section>
<!--profile end-->

<!--news-->
<section class="news">
    <div class="container">
        <div class="row row-cols-2 g-5">
            <div class="col-md-8">
                <h5 class="title">Berita</h5>
                <div class="news-item mt-5">
                    <img src="assets/news/news1.png" alt="News">
                    <div class="news-detail">
                        <h5 class="news-title">Odio eu feugiat pretium nibh ipsum. Adipiscing commo elit at imperdiet
                            dui</h5>
                        <p class="news-date mt-2">2 April 2021</p>
                        <p class="news-meta mt-2">Purus sit amet luctus venenatis. Adipiscing at in tellus integer
                            feugiat
                            scelerisque varius.
                            Faucibus vitae aliquet nec dui ut ornare. Phasellus vestibulum lorem sed risus
                            ultricies...</p>
                        <a class="news-cta mt-2" href="#">Baca selengkapnya <img src="{{asset('front/assets/icons/right.png')}}"
                                                                                 alt="Selengkapnya"></a>
                    </div>
                </div>
                <div class="news-item mt-5">
                    <img src="{{asset('front/assets/news/news2.png')}}" alt="News">
                    <div class="news-detail">
                        <h5 class="news-title">Odio eu feugiat pretium nibh ipsum. Adipiscing commo elit at imperdiet
                            dui</h5>
                        <p class="news-date mt-2">2 April 2021</p>
                        <p class="news-meta mt-2">Purus sit amet luctus venenatis. Adipiscing at in tellus integer
                            feugiat
                            scelerisque varius.
                            Faucibus vitae aliquet nec dui ut ornare. Phasellus vestibulum lorem sed risus
                            ultricies...</p>
                        <a class="news-cta mt-2" href="#">Baca selengkapnya <img src="{{asset('front/assets/icons/right.png')}}"
                                                                                 alt="Selengkapnya"></a>
                    </div>
                </div>
                <div class="news-item mt-5">
                    <img src="{{asset('front/assets/news/news3.png')}}" alt="News">
                    <div class="news-detail">
                        <h5 class="news-title">Odio eu feugiat pretium nibh ipsum. Adipiscing commo elit at imperdiet
                            dui</h5>
                        <p class="news-date mt-2">2 April 2021</p>
                        <p class="news-meta mt-2">Purus sit amet luctus venenatis. Adipiscing at in tellus integer
                            feugiat
                            scelerisque varius.
                            Faucibus vitae aliquet nec dui ut ornare. Phasellus vestibulum lorem sed risus
                            ultricies...</p>
                        <a class="news-cta mt-2" href="#">Baca selengkapnya <img src="{{asset('front/assets/icons/right.png')}}"
                                                                                 alt="Selengkapnya"></a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <h5 class="title mb-5">Kisah Sukses</h5>
                <div class="mini-news-item mt-3">
                    <h5 class="mini-news-title">Adipiscing at in tellus integer feugiat scelerisque varius</h5>
                    <p class="mini-news-date mt-2">31 Maret 2021</p>
                </div>
                <div class="mini-news-item mt-3">
                    <h5 class="mini-news-title">Quis imperdiet massa tincidunt nunc pulvinar sapien et ligula</h5>
                    <p class="mini-news-date mt-2">31 Maret 2021</p>
                </div>
                <div class="mini-news-item mt-3">
                    <h5 class="mini-news-title">Id leo in vitae turpis massa sed elementum tempus</h5>
                    <p class="mini-news-date mt-2">31 Maret 2021</p>
                </div>
                <div class="mini-news-item mt-3">
                    <h5 class="mini-news-title">Etiam dignissim diam quis enim lobortis</h5>
                    <p class="mini-news-date mt-2">31 Maret 2021</p>
                </div>
                <div class="mini-news-item mt-3">
                    <h5 class="mini-news-title">Elementum facilisis leo vel fringilla est ullamcorper eget nulla
                        facilisi</h5>
                    <p class="mini-news-date mt-2">31 Maret 2021</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--news end-->

<!--footer-->
<section class="footer">
    <div class="container">
        <div class="row row-cols-3">
            <div class="col-2">
                <div class="row row-cols-3 social">
                    <div class="col">
                        <a href="#"><img src="{{asset('front/assets/footer/instagram.svg')}}" alt="Instagram"></a>
                    </div>
                    <div class="col">
                        <a href="#"><img src="{{asset('front/assets/footer/facebook.svg')}}" alt="Facebook"></a>
                    </div>
                    <div class="col">
                        <a href="#"><img src="{{asset('front/assets/footer/twitter.svg')}}" alt="Twitter"></a>
                    </div>
                </div>
            </div>
            <div class="col-8 d-flex flex-column align-items-center justify-content-start">
                <img src="{{asset('front/assets/footer/ngo-white.svg')}}" alt="SINGO">
                <div class="links mt-4">
                    <a href="#">Beranda</a>
                    <a href="#">Tentang</a>
                    <a href="#">Profil NGO</a>
                    <a href="#">Kontak</a>
                    <a href="#">Berita</a>
                </div>
            </div>
            <div class="col-2 address-info">
                <p>Jl. Medan Merdeka Utara No.7,
                    Jakarta Pusat 10110</p>
                <hr>
                <p>singo@kemendagri .go.id</p>
                <p>021 3810343</p>
            </div>
        </div>
        <div class="row justify-content-center mt-2">
            <p class="text-center copyright">Copyright &copy; 2021 All Rights Reserved</p>
        </div>
    </div>
</section>
<!--footer end-->
<script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>