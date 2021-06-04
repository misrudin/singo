@section('detailheader')
    @include('layout.detailheader')
@show

<!-- back-action -->
<div class="back-action mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <a class="back-button" href="{{ url('/') }}">
                    <img src="{{asset('front/assets/icons/left.png')}}" alt="Back"> Beranda SINGO
                </a>
            </div>
        </div>
    </div>
</div>
<!-- back-action end -->

<!--address -->
<section id="address">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="address-detail">
                    <img src="{{asset('front/assets/navbar/rikolto.svg')}}" alt="Logo">
                    <div class="detail">
                        <h1>Rikolto</h1>
                        <div class="item">
                            <img src="{{asset('front/assets/icons/feather_map-pin.svg')}}" alt="Map">
                            <p>Jl. Tukad Unda VIII No.10b, Panjer, Kec. Denpasar Selatan, Kota Denpasar, Bali 80225</p>
                        </div>
                        <div class="item-container mt-1">
                            <div class="item">
                                <img src="{{asset('front/assets/icons/feather_mail.svg')}}" alt="Main">
                                <p>contact@asbindonesia.org</p>
                            </div>
                            <div class="item ms-4">
                                <img src="{{asset('front/assets/icons/feather_globe.svg')}}" alt="Globe">
                                <p>https://www.asbindonesia.org/</p>
                            </div>
                        </div>
                        <div class="item mt-1">
                            <img src="{{asset('front/assets/icons/feather_phone.svg')}}" alt="Phone">
                            <p>+62274 4532104</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--address end-->

<!--profile detail-->
<section id="profile-detail">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="profile-detail">
                    <h5 class="title">Profil</h5>
                    <div class="line"></div>
                    <div class="item-container mt-4">
                        <div class="item">
                            <p class="item-title">Didirikan</p>
                            <p class="item-description">24 May 1997</p>
                        </div>
                        <div class="item ms-5">
                            <p class="item-title">Didirikan</p>
                            <p class="item-description">24 May 1997</p>
                        </div>
                    </div>

                    <div class="item mt-4">
                        <p class="item-title">Industri</p>
                        <p class="item-description">Penguatan kapasitas masyarakat dan lembaga masyarakat</p>
                    </div>

                    <div class="item mt-4">
                        <p class="item-title">Visi</p>
                        <p class="item-description">Lahirnya generasi baru petani sejahtera berkat penerapan
                            praktik-praktik inovatif untuk memenuhi permintaan konsumen yang terus meningkat akan
                            komoditas pangan yang sehat dan di produksi secara berkelanjutan</p>
                    </div>

                    <div class="item mt-4">
                        <p class="item-title">Misi</p>
                        <p class="item-description">Rikolto di Indonesia memungkinkan dan mendukung petani kecil untuk
                            mengambil peran mereka dalam pengentasan kemiskinan di pedesaan dan berkontribusi memberi
                            makan populasi dunia yang tumbuh secara berkelanjutan.</p>
                    </div>

                    <div class="item mt-4">
                        <p class="item-title">Aktivitas Utama</p>
                        <p class="item-description">Program peningkatan kapasitas pemerintah desa dan kelembagaan
                            kemasyarakatan desa dan bidang ekonomi dengan memerhatikan aspek sosial, ekonomi, dan
                            lingkungan</p>
                    </div>


                    <h5 class="title mt-5">Kisah Sukses</h5>
                    <div class="line"></div>
                    <div class="main-content mt-4">
                        <div class="single-content">
                            <img src="{{asset('front/assets/news/image%2020.png')}}" alt="News">
                            <h5 class="title mt-2">Koperasi Barokah Mengekspor 15,6 Ton Biji Kopi Arabika Ke Belgia -
                                70th
                                Kerjasama Indonesia Belgia</h5>
                            <div class="footer-detail mt-2">
                                <p class="date">22 April 2021</p>
                                <div class="news-cta">
                                    <a href="#">Baca selengkapnya</a>
                                    <img src="{{asset('front/assets/icons/right.png')}}" alt="Selengkapnya">
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-3 g-5 mt-1 grid-news">
                            <div class="col news-item">
                                <img src="{{asset('front/assets/news/news1.png')}}" alt="News">
                                <h4 class="title mt-2">Quis vel eros donec acodio tempor orci dapibus icul...</h4>
                                <p class="date mt-2">18 April 2021</p>
                                <div class="news-cta mt-2">
                                    <a href="#">Baca selengkapnya</a>
                                    <img src="{{asset('front/assets/icons/right.png')}}" alt="Selengkapnya">
                                </div>
                            </div>
                            <div class="col news-item">
                                <img src="{{asset('front/assets/news/news2.png')}}" alt="News">
                                <h4 class="title mt-2">Quis vel eros donec acodio tempor orci dapibus icul...</h4>
                                <p class="date mt-2">18 April 2021</p>
                                <div class="news-cta mt-2">
                                    <a href="#">Baca selengkapnya</a>
                                    <img src="{{asset('front/assets/icons/right.png')}}" alt="Selengkapnya">
                                </div>
                            </div>
                            <div class="col news-item">
                                <img src="{{asset('front/assets/news/news3.png')}}" alt="News">
                                <h4 class="title mt-2">Quis vel eros donec acodio tempor orci dapibus icul...</h4>
                                <p class="date mt-2">18 April 2021</p>
                                <div class="news-cta mt-2">
                                    <a href="#">Baca selengkapnya</a>
                                    <img src="{{asset('front/assets/icons/right.png')}}" alt="Selengkapnya">
                                </div>
                            </div>
                        </div>
                    </div>
                    <h5 class="title mt-5">Berita</h5>
                    <div class="line"></div>
                    <div class="main-content mt-4">
                        <div class="single-content">
                            <img src="{{asset('front/assets/news/image%2033.png')}}" alt="News">
                            <h5 class="title mt-2">Viverra tellus in hac habitasse platea dictumst vestibulum. Nunc
                                aliquet bibendum enim facilisis gravida neque con...</h5>
                            <div class="footer-detail mt-2">
                                <p class="date">21 April 2021</p>
                                <div class="news-cta">
                                    <a href="#">Baca selengkapnya</a>
                                    <img src="{{asset('front/assets/icons/right.png')}}" alt="Selengkapnya">
                                </div>
                            </div>
                        </div>
                        <div class="row row-cols-3 g-5 mt-1 grid-news">
                            <div class="col news-item">
                                <img src="{{asset('front/assets/news/image%2031.png')}}" alt="News">
                                <h4 class="title mt-2">Quis vel eros donec acodio tempor orci dapibus icul...</h4>
                                <p class="date mt-2">18 April 2021</p>
                                <div class="news-cta mt-2">
                                    <a href="#">Baca selengkapnya</a>
                                    <img src="{{asset('front/assets/icons/right.png')}}" alt="Selengkapnya">
                                </div>
                            </div>
                            <div class="col news-item">
                                <img src="{{asset('front/assets/news/image%2035.png')}}" alt="News">
                                <h4 class="title mt-2">Quis vel eros donec acodio tempor orci dapibus icul...</h4>
                                <p class="date mt-2">18 April 2021</p>
                                <div class="news-cta mt-2">
                                    <a href="#">Baca selengkapnya</a>
                                    <img src="{{asset('front/assets/icons/right.png')}}" alt="Selengkapnya">
                                </div>
                            </div>
                            <div class="col news-item">
                                <img src="{{asset('front/assets/news/image%2032.png')}}" alt="News">
                                <h4 class="title mt-2">Quis vel eros donec acodio tempor orci dapibus icul...</h4>
                                <p class="date mt-2">18 April 2021</p>
                                <div class="news-cta mt-2">
                                    <a href="#">Baca selengkapnya</a>
                                    <img src="{{asset('front/assets/icons/right.png')}}" alt="Selengkapnya">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--profile detail end-->

@section('footer')
    @include('layout.footer')
@show
</body>
</html>