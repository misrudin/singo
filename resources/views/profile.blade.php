@section('title', 'Profile')

@section('header')
@include('layout.header')
@show

<!--list-->
<section class="list-logo">
    <div class="container-list-logo">
        <h1 class="text-center title">
            Non-Government Organization <br>
            yang tergabung dalam SINGO
        </h1>
        <p class="text-center description mt-3">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua
        </p>
        <div class="mt-3 list">
            <a class="item" href="{{ url('/oisca') }}">
                <img src="{{asset('front/assets/logo/oisca.svg')}}" alt="Oisca">
                <div class="spacer"></div>
                <p>Pertanian & Lingkungan Hidup</p>
            </a>

            <a class="item" href="{{ url('/konard') }}">
                <img src="{{asset('front/assets/logo/konard.svg')}}" alt="Oisca">
                <div class="spacer"></div>
                <p>Promosi Nilai-nilai Demokrasi</p>
            </a>

            <a class="item" href="{{ url('/winrock') }}">
                <img src="{{asset('front/assets/logo/winrock.svg')}}" alt="Oisca">
                <div class="spacer"></div>
                <p>Kemanusiaan</p>
            </a>

            <a class="item" href="{{ url('/snv') }}">
                <img src="{{asset('front/assets/logo/snv.svg')}}" alt="Oisca">
                <div class="spacer"></div>
                <p>Pertanian Terpadu Berkelanjutan, Air & Sanitasi, Energi</p>
            </a>

            <!-- space top -->
            <a class="item" style="visibility: hidden; height: 100px">
                <img src="" alt="none">
                <p>-</p>
            </a>
            <!-- space top end -->

            <a class="item" href="{{ url('/icco') }}">
                <img src="{{asset('front/assets/logo/icco.svg')}}" alt="Oisca">
                <div class="spacer"></div>
                <p>Kemanusiaan</p>
            </a>

            <a class="item" href="{{ url('/plan') }}">
                <img src="{{asset('front/assets/logo/plan.svg')}}" alt="Oisca">
                <div class="spacer"></div>
                <p>Perlindungan & Kesejahteraan Anak</p>
            </a>

            <a class="item" href="{{ url('/islamic') }}">
                <img src="{{asset('front/assets/logo/islamic.svg')}}" alt="Oisca">
                <div class="spacer"></div>
                <p>Peningkatan Kesejahteraan Masyarakat</p>
            </a>

            <a class="item" href="{{ url('/rikolto') }}">
                <img src="{{asset('front/assets/logo/rikolto.svg')}}" alt="Oisca">
                <div class="spacer"></div>
                <p>Pemberdayaan Masyarakat</p>
            </a>

            <a class="item" href="{{ url('/asb') }}">
                <img src="{{asset('front/assets/logo/asb.svg')}}" alt="Oisca">
                <div class="spacer"></div>
                <p>Penguatan Kapasitas Masyarakat</p>
            </a>

            <a class="item" href="{{ url('/ford') }}">
                <img src="{{asset('front/assets/logo/ford.svg')}}" alt="Oisca">
                <div class="spacer"></div>
                <p>Pemberdayaan Masyarakat</p>
            </a>

            <a class="item" href="{{ url('/swiss') }}">
                <img src="{{asset('front/assets/logo/swiss.svg')}}" alt="Oisca">
                <div class="spacer"></div>
                <p>Pengembangan Ekonomi Masyarakat</p>
            </a>
        </div>
    </div>
</section>
<!--list end-->

@section('footer')
@include('layout.footer')
@show
</body>
</html>
