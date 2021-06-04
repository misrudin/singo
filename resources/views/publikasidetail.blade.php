@section('detailheader')
    @include('layout.detailheader')
@show
<!-- back-action -->
<div class="back-action mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <a class="back-button" href="publikasi.html">
                    <img src="{{asset('front/assets/icons/left.png')}}" alt="Back"> Publikasi Rikolto
                </a>
            </div>
        </div>
    </div>
</div>
<!-- back-action end -->

<!--profile detail-->
<section id="profile-detail">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="row row-cols-2 g-5">
                    <div class="col-md-4 detail-publikasi">
                        <img src="{{asset('front/assets/publikasi/image%2030.png')}}" alt="Publikasi">
                        <div class="item-detail-publikasi mt-3">
                            <img class="icon-publikasi" src="{{asset('front/assets/icons/feather_calendar.svg')}}" alt="Calwndar">
                            <p class="text-publikasi ms-2">2021</p>
                            <img class="icon-publikasi ms-4" src="{{asset('front/assets/icons/feather_globe.svg')}}" alt="Calwndar">
                            <p class="text-publikasi ms-2">Bahasa Indonesia</p>
                        </div>
                        <div class="item-detail-publikasi mt-2">
                            <p class="isbn">ISBN</p>
                            <p class="text-publikasi ms-2">9839283293</p>
                        </div>
                        <div class="item-detail-publikasi mt-2">
                            <img class="icon-publikasi" src="{{asset('front/assets/icons/feather_bookmark.svg')}}" alt="Calwndar">
                            <p class="text-publikasi ms-2">Erlangga</p>
                        </div>
                        <button class="btn btn-primary d-block mt-4" style="width: 100%">Unduh</button>
                    </div>
                    <div class="col-md-8 detail-publikasi-description">
                        <h1>It Ends With Us</h1>
                        <div class="user-publikasi mt-2">
                            <img src="{{asset('front/assets/icons/feather_user.svg')}}" alt="User">
                            <p>Cooleen Hoover</p>
                        </div>
                        <p class="description-publikasi mt-2">Integer eget aliquet nibh praesent. Porttitor eget dolor morbi non arcu risus quis. Viverra
                            tellus in hac habitasse platea dictumst vestibulum. Nunc aliquet bibendum enim facilisis
                            gravida neque convallis a. Aenean sed adipiscing diam donec adipiscing tristique risus nec.
                            Enim lobortis scelerisque fermentum dui. Eu feugiat pretium nibh ipsum consequat. A
                            pellentesque sit amet porttitor eget.

                            Dui id ornare arcu odio ut sem nulla pharetra. Tristique risus nec feugiat in fermentum.
                            Pharetra sit amet aliquam id diam maecenas ultricies mi. Nisl nunc mi ipsum faucibus vitae
                            aliquet nec. Feugiat in fermentum posuere urna nec tincidunt praesent semper feugiat. Et
                            odio pellentesque diam volutpat commodo sed egestas egestas. Quisque sagittis purus sit amet
                            volutpat consequat. Varius morbi enim nunc faucibus a pellentesque sit amet porttitor. Id
                            consectetur purus ut faucibus pulvinar elementum integer enim neque.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-9">
                <div class="profile-detail">
                    <h5 class="title">Publikasi Lainnya</h5>
                    <div class="line mb-4"></div>
                    <div class="row row-cols-3 gx-5 gy-4">
                        <div class="col item_publikasi">
                            <div class="image-container">
                                <img src="{{asset('front/assets/publikasi/image%2027.png')}}" alt="Publikasi">
                            </div>
                            <h4 class="mt-3">Peaky Blinders The Real Story</h4>
                            <p class="mt-2">Carl Chinn</p>
                        </div>
                        <div class="col item_publikasi">
                            <div class="image-container">
                                <img src="{{asset('front/assets/publikasi/image%2029.png')}}" alt="Publikasi">
                            </div>
                            <h4 class="mt-3">Filosofi Teras</h4>
                            <p class="mt-2">Henry Manampiring</p>
                        </div>
                        <div class="col item_publikasi">
                            <a class="link" href="{{ url('/news-detail') }}">
                            <div class="image-container">
                                <img src="{{asset('front/assets/publikasi/image%2028.png')}}" alt="Publikasi">
                            </div>
                            </a>
                            <h4 class="mt-3">The Subtle Art of Not Giving A F*ck</h4>
                            <p class="mt-2">Mark Manson</p>
                        </div>
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