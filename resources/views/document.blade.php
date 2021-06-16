@section('detailheader')
    @include('layout.detailheader')
@show
<!--banner-->
<section style="background-image: url({{url('front/assets/images/bg-dokumen.png')}})"
         class="banner banner-2 d-flex align-items-center">
    <div class="container">
        <div class="row title-container">
            <div class="col-md-6">
                <h1>Dokumen apa yang Anda cari?</h1>
            </div>
        </div>
        <div class="row">
            <div id="container" class="col-md-6">
                <form action="" class="mt-5">
                    <div id="form-document" class="form-document">
                        <div class="col-6">
                            <label for="document" class="form-label text-light">Jenis Dokumen</label>
                            <select id="document" class="form-control form-select select-ngo" name="state">
                                <option value="AL">Momorandum Saling Pengertian</option>
                                <option value="AL">Rencana Induk Kerja</option>
                                <option value="AL">Rencana Kerja Tahunan</option>
                                <option value="AL">Laporan</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="tahun" class="form-label text-light">Tahun</label>
                            <select id="tahun" class="form-control form-select select-ngo" name="state">
                                <option value="AL">2021</option>
                                <option value="AL">2020</option>
                                <option value="AL">2019</option>
                                <option value="AL">2018</option>
                            </select>
                        </div>
                        <div id="ngo-container" class="col-12">
                            <label for="ngo" class="form-label text-light">NGO</label>
                            <select id="ngo" disabled class="form-control form-select" name="state">
                                <option value="AL">Rikolto</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <button id="buttonSearch" type="button" class="btn btn-primary">Cari dokumen</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--end of banner-->
<section class="document-found">
    <div class="container py-5">
        <h1 class="title">Hasil pencarian</h1>
        <div class="documents mt-4">
            <div class="col document">
                <img src="{{asset('front/assets/icons/pdf-icon.svg')}}" alt="Pdf">
                <p class="mt-4">Dokumen MSP 2020 - 2023</p>
            </div>
            <div class="col document">
                <img src="{{asset('front/assets/icons/pdf-icon.svg')}}" alt="Pdf">
                <p class="mt-4">Dokumen MSP 2020 - 2023</p>
            </div>
            <div class="col document">
                <img src="{{asset('front/assets/icons/pdf-icon.svg')}}" alt="Pdf">
                <p class="mt-4">Dokumen MSP 2020 - 2023</p>
            </div>
            <div class="col document">
                <img src="{{asset('front/assets/icons/pdf-icon.svg')}}" alt="Pdf">
                <p class="mt-4">Dokumen MSP 2020 - 2023</p>
            </div>
            <div class="col document">
                <img src="{{asset('front/assets/icons/pdf-icon.svg')}}" alt="Pdf">
                <p class="mt-4">Dokumen MSP 2020 - 2023</p>
            </div>
            <div class="col document">
                <img src="{{asset('front/assets/icons/pdf-icon.svg')}}" alt="Pdf">
                <p class="mt-4">Dokumen MSP 2020 - 2023</p>
            </div>
        </div>
    </div>
</section>
<!--footer-->

@section('margin', 'm-0')
@section('footer')
    @include('layout.footer')
@show
<!--footer end-->


<script>
    $(document).ready(function () {
        $('.select-ngo').select2({
            minimumResultsForSearch: -1,
            dropdownCssClass: "dropdown",
            selectionCssClass: "selected-ngo"
        });

        $('b[role="presentation"]').hide();
        $('.select2-selection__arrow').append('<i class="fa fa-angle-down"></i>');


        //animasi
        $('#buttonSearch').click(function () {
            const container = $('#container')
            container.removeClass('col-md-5')
            container.addClass('col-md-12')

            const formDoc = $('#form-document')
            formDoc.addClass('full')
            formDoc.animate({
                marginBottom: '50px',
            }, 700)

            const ngoContainer = $('#ngo-container')
            ngoContainer.removeClass('col-12')
            ngoContainer.addClass('col-6')

            $('.banner-2').animate({
                height: '150px',
            }, 300)

            $('.banner-2').addClass('found')
            $('.document-found').show()
        })
    });
</script>
</body>
</html>
