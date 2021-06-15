@section('title', 'Home')

@section('header')
    @include('layout.header')
@show

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
<section id="achievement" class="achievement mt-5">
    <div class="container">
        <div class="item">
            <h5 class="counter" data-count="240" data-sufix="Rp" data-prefix="M">Rp 0 M</h5>
            <p class="mt-3">Komitmen Hibah</p>
        </div>
        <div class="item">
            <h5 class="counter" data-count="192" data-sufix="Rp" data-prefix="M">Rp 0 M</h5>
            <p class="mt-3">Serapan</p>
        </div>
        <div class="item">
            <h5 class="counter" data-count="30" data-prefix="+">0+</h5>
            <p class="mt-3">Mitra Asing</p>
        </div>
        <div class="item">
            <h5 class="counter" data-count="25" data-prefix="+">0+</h5>
            <p class="mt-3">Wilayah Kerja</p>
        </div>
        <div class="item">
            <h5 class="counter" data-count="70" data-prefix="+">0+</h5>
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
                <?php
                $ulangi = 0;
                while ($ulangi < 3){ $ulangi++;?>
                <div class="news-item mt-5">
                    <img src="{{asset('front/assets/news/news1.png')}}" alt="News">
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
                <?php } ?>
            </div>

            <div class="col-6 col-md-4">
                <h5 class="title mb-5">Kisah Sukses</h5>
                <?php
                $ulangi = 0;
                while ($ulangi < 5){ $ulangi++;?>
                <div class="mini-news-item mt-3">
                    <h5 class="mini-news-title">Adipiscing at in tellus integer feugiat scelerisque varius</h5>
                    <p class="mini-news-date mt-2">31 Maret 2021</p>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!--news end-->
@section('footer')
    @include('layout.footer')
@show
<script>
    function buttonSelengkapnya() {
        window.location.href = "/singo/profile.html"
    }

    $(window).scroll(startCounter);

    function startCounter() {
        if ($(window).scrollTop() > $('#achievement')[0].offsetTop/3) {
            $(window).off("scroll", startCounter);

            $('.counter').each(function() {
                let $this = $(this),
                    countTo = $this.attr('data-count'),
                    sufix = $this.attr('data-sufix'),
                    prefix = $this.attr('data-prefix');


                $({ countNum: $this.text()}).animate({
                        countNum: countTo
                    },
                    {
                        duration: 7000,
                        easing:'linear',
                        step: function() {
                            if (sufix) {
                                $this.text(`${sufix} ${Math.floor(this.countNum)} ${prefix}`);
                            }else {
                                $this.text(`${Math.floor(this.countNum)}${prefix}`);
                            }
                        },
                        complete: function() {
                            if (sufix) {
                                $this.text(`${sufix} ${this.countNum} ${prefix}`);
                            }else {
                                $this.text(`${this.countNum}${prefix}`);
                            }
                        }
                    });
            });

        }
    }

</script>
</body>
</html>
