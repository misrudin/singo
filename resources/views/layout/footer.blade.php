<!--footer-->
<section class="{{ $className ?? "footer" }}">
    <div class="container">
        <div class="row-footer">
            <div class="footer-social">
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
            <div class="footer-main">
                <img src="{{asset('front/assets/footer/ngo-white.svg')}}" alt="SINGO">
                <div class="links mt-4">
                    <a href="#" class="col">Beranda</a>
                    <a href="#" class="col">Tentang</a>
                    <a href="#" class="col">Profil NGO</a>
                    <a href="#" class="col">Kontak</a>
                    <a href="#" class="col">Berita</a>
                </div>
            </div>
            <div class="footer-address">
                <p>Jl. Medan Merdeka Utara No.7,
                    Jakarta Pusat 10110</p>
                <hr>
                <p>singo@kemendagri .go.id</p>
                <p>021 3810343</p>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <p class="text-center copyright">Copyright &copy; 2021 All Rights Reserved</p>
        </div>
    </div>
</section>
<!--footer end-->
<script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('front/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('front/js/select2.min.js')}}"></script>

