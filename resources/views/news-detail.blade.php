@section('detailheader')
@include('layout.detailheader')
@show
<div style="height: 50px"></div>
<!--content-->
<div class="container">
    <div class="row-detail-news">
        <div class="col">
            <!-- back-action -->
            <div class="back-action">
                <a class="back-button" href="{{ url('/'. $name .'') }}">
                    <img src="{{asset('front/assets/icons/left.png')}}" alt="Back"> Kembali
                </a>
            </div>
            <!-- back-action end -->

            <!--detail-->
            <div class="detail-news mt-4">
                <h1 class="title">Koperasi Barokah Mengekspor 15,6 Ton Biji Kopi Arabika Ke Belgia - 70th Kerjasama
                    Indonesia Belgia</h1>
                <p class="date mt-2">22 April 2021</p>
                <img src="{{asset('front/assets/news/image%2020.png')}}" class="mt-4" alt="news">
                <p class="full-description mt-4">Odio ut enim blandit volutpat maecenas volutpat blandit aliquam etiam.
                    At
                    tellus at urna condimentum mattis pellentesque id nibh. Quis vel eros donec ac odio tempor orci
                    dapibus. Tempus iaculis urna id volutpat lacus laoreet non curabitur. Donec adipiscing tristique
                    risus nec feugiat. Lacus vestibulum sed arcu non odio euismod lacinia at. Vitae ultricies leo
                    integer malesuada nunc. Sed blandit libero volutpat sed cras. Velit laoreet id donec ultrices
                    tincidunt arcu non sodales neque. In cursus turpis massa tincidunt.

                    Integer eget aliquet nibh praesent. Porttitor eget dolor morbi non arcu risus quis. Viverra tellus
                    in hac habitasse platea dictumst vestibulum. Nunc aliquet bibendum enim facilisis gravida neque
                    convallis a. Aenean sed adipiscing diam donec adipiscing tristique risus nec. Enim lobortis
                    scelerisque fermentum dui. Eu feugiat pretium nibh ipsum consequat. A pellentesque sit amet
                    porttitor eget.

                    Velit laoreet id donec ultrices tincidunt arcu non. Arcu vitae elementum curabitur vitae nunc. Quam
                    vulputate dignissim suspendisse in est. Sit amet dictum sit amet justo donec enim diam vulputate.
                    Venenatis urna cursus eget nunc scelerisque viverra mauris in aliquam. In egestas erat imperdiet
                    sed. Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque purus semper. Tincidunt
                    praesent semper feugiat nibh sed pulvinar proin gravida hendrerit. At augue eget arcu dictum varius
                    duis. Sed lectus vestibulum mattis ullamcorper. Ultricies mi eget mauris pharetra. Aliquam ultrices
                    sagittis orci a scelerisque. Venenatis a condimentum vitae sapien. Porttitor leo a diam sollicitudin
                    tempor id eu nisl nunc.

                    Dui id ornare arcu odio ut sem nulla pharetra. Tristique risus nec feugiat in fermentum. Pharetra
                    sit amet aliquam id diam maecenas ultricies mi. Nisl nunc mi ipsum faucibus vitae aliquet nec.
                    Feugiat in fermentum posuere urna nec tincidunt praesent semper feugiat. Et odio pellentesque diam
                    volutpat commodo sed egestas egestas. Quisque sagittis purus sit amet volutpat consequat. Varius
                    morbi enim nunc faucibus a pellentesque sit amet porttitor. Id consectetur purus ut faucibus
                    pulvinar elementum integer enim neque.</p>
            </div>
            <!--detail end-->
        </div>
        <aside class="sidebar-right">
            <h4 class="title">Kisah Sukses Lainnya</h4>
            <div class="line"></div>
            <div class="news-item-sidebar mt-4">
                <img src="{{asset('front/assets/news/news1.png')}}" alt="news">
                <div>
                    <h5 class="title">Odio eu feugiat pretium nibh ipsum. Adipiscing commo...</h5>
                    <p class="date mt-2">2 April 2021</p>
                </div>
            </div>
            <div class="news-item-sidebar mt-4">
                <img src="{{asset('front/assets/news/news2.png')}}" alt="news">
                <div>
                    <h5 class="title">Odio eu feugiat pretium nibh ipsum. Adipiscing commo...</h5>
                    <p class="date mt-2">2 April 2021</p>
                </div>
            </div>
            <div class="news-item-sidebar mt-4">
                <img src="{{asset('front/assets/news/news3.png')}}" alt="news">
                <div>
                    <h5 class="title">Odio eu feugiat pretium nibh ipsum. Adipiscing commo...</h5>
                    <p class="date mt-2">2 April 2021</p>
                </div>
            </div>
            <div class="d-flex justify-content-end mt-5">
                <button class="btn btn-primary">Lihat semua kisah sukses</button>
            </div>
        </aside>
    </div>
</div>
<!--content end-->

<!--footer-->
@section('footer')
@include('layout.footer')
@show
<!--footer end-->
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
