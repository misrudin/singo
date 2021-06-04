@section('detailheader')
    @include('layout.detailheader')
@show
<!--banner-->
<section style="background-image: url(front/assets/images/bg-dokumen.png)" class="banner banner-2 d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Dokumen apa yang Anda cari?</h1>
                <form action="" class="mt-5">
                    <div class="row row-cols-2 g-4">
                        <div class="col">
                            <label for="document" class="form-label text-light">Jenis Dokumen</label>
                            <select id="document" class="form-control form-select select-ngo" name="state">
                                <option value="AL">Momorandum Saling Pengertian</option>
                                <option value="AL">Rencana Induk Kerja</option>
                                <option value="AL">Rencana Kerja Tahunan</option>
                                <option value="AL">Laporan</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="tahun" class="form-label text-light">Tahun</label>
                            <select id="tahun" class="form-control form-select select-ngo" name="state">
                                <option value="AL">2021</option>
                                <option value="AL">2020</option>
                                <option value="AL">2019</option>
                                <option value="AL">2018</option>
                            </select>
                        </div>
                    </div>
                    <div class="row row-cols-1 mt-4">
                        <div class="col">
                            <label for="ngo" class="form-label text-light">NGO</label>
                            <select id="ngo" disabled class="form-control form-select select-ngo" name="state">
                                <option value="AL">Rikolto</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-4">Cari dokumen</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!--end of banner-->

<!--footer-->
@section('footer')
    @include('layout.footer')
@show
<!--footer end-->
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function () {
        $('.select-ngo').select2({
            minimumResultsForSearch: -1,
            dropdownCssClass: "dropdown",
            selectionCssClass: "selected-ngo"
        });

        $('b[role="presentation"]').hide();
        $('.select2-selection__arrow').append('<i class="fa fa-angle-down"></i>');
    });
</script>
</body>
</html>