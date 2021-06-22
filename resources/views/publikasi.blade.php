@section('title', 'Publikasi')

@section('detailheader')
    @include('layout.detailheader')
@show
<!--address -->
<section id="address">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="address-detail">
                    <img src="{{asset('front/assets/navbar/'. $name .'.svg')}}" class="logo" alt="Logo">
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
                            <div class="item">
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
                    <h5 class="title">Publikasi</h5>
                    <div class="line mb-4"></div>

                    <div class="row-publikasi">
                        <a class="col item_publikasi" href="{{ url('/' . $name . '/publikasi/1') }}">
                            <div class="image-container">
                                <img src="{{asset('front/assets/publikasi/1.png')}}" alt="Publikasi">
                            </div>
                            <h4 class="mt-3">Modul Pelatihan Implementasi UU 14</h4>
                            <p class="mt-2">Pak Boed</p>
                        </a>
                        <a class="col item_publikasi" href="{{ url('/' . $name . '/publikasi/2') }}">
                            <div class="image-container">
                                <img src="{{asset('front/assets/publikasi/2.png')}}" alt="Publikasi">
                            </div>
                            <h4 class="mt-3">Bonjour Bobigny n° 880 du 13 au 26</h4>
                            <p class="mt-2">Ville de Bobigny</p>
                        </a>
                        <a class="col item_publikasi" href="{{ url('/' . $name . '/publikasi/3') }}">
                            <div class="image-container">
                                <img src="{{asset('front/assets/publikasi/3.png')}}" alt="Publikasi">
                            </div>
                            <h4 class="mt-3">It Ends With Us</h4>
                            <p class="mt-2">Colleen Hoover</p>
                        </a>

                        <a class="col item_publikasi" href="{{ url('/' . $name . '/publikasi/4') }}">
                            <div class="image-container">
                                <img src="{{asset('front/assets/publikasi/4.png')}}" alt="Publikasi">
                            </div>
                            <h4 class="mt-3">Peaky Blinders The Real Story</h4>
                            <p class="mt-2">Carl Chinn</p>
                        </a>
                        <a class="col item_publikasi" href="{{ url('/' . $name . '/publikasi/5') }}">
                            <div class="image-container">
                                <img src="{{asset('front/assets/publikasi/5.png')}}" alt="Publikasi">
                            </div>
                            <h4 class="mt-3">Filosofi Teras</h4>
                            <p class="mt-2">Henry Manampiring</p>
                        </a>
                        <a class="col item_publikasi" href="{{ url('/' . $name . '/publikasi/6') }}">
                            <div class="image-container">
                                <img src="{{asset('front/assets/publikasi/6.png')}}" alt="Publikasi">
                            </div>
                            <h4 class="mt-3">The Subtle Art of Not Giving A F*ck</h4>
                            <p class="mt-2">Mark Manson</p>
                        </a>
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <button class="btn btn-primary">Lihat lebih banyak</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--profile detail end-->

<!--footer-->
@section('footer')
@include('layout.footer')
@show
<!--footer end-->
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
