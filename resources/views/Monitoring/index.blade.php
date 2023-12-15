@extends('home')

@section('content') 
<div class="md-form input-group mb-4 d-flex justify-content-end" style="margin-top: 0px; margin-bottom: 15px !important;">
    <a id="Monitoring_filterTersedia" class="btn btn-outline-primary rounded-pill" style="padding: 10px 20px; color:black !important">Tersedia</a>
    <a id="Monitoring_filterTIdakTersedia" data-ketersedian="0" id="MainContent_linkKetersedian" class="btn btn-outline-primary rounded-pill" style="padding: 10px 20px;  color:black !important">Tidak Tersedia</a>
    <button class="btn btn-outline-primary rounded-pill dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false" style="padding: 10px 50px;  color:black !important">
        Lantai
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" asp-controller="Monitoring" asp-action="FilterLantai" asp-route-id="G">Lantai G</a></li>
        <li><a class="dropdown-item" asp-controller="Monitoring" asp-action="FilterLantai" asp-route-id="1">Lantai 1</a></li>
        <li><a class="dropdown-item" asp-controller="Monitoring" asp-action="FilterLantai" asp-route-id="2">Lantai 2</a></li>
    </ul>
    <input name="ctl00$MainContent$txtCari" type="text" id="MainContent_txtCari" class="form-control form-cari" placeholder="Cari" />
    <a id="MainContent_linkCari" class="btn btn-primary btn-rounded waves-effect waves-light rounded-pill" href="javascript:__doPostBack(&#39;ctl00$MainContent$linkCari&#39;,&#39;&#39;)" style="padding: 10px 30px;"><i class="fas fa-search"></i></a> 
</div>
    <div class="col-sm-4 mb-3">
        <div class="card" id="gradient2" style="background-image: linear-gradient(90deg, #0B4499 0.01%, #0059AB 0.02%, rgba(71, 111, 172, 0.81) 50.52%, rgba(68, 109, 171, 0.72) 59.9%, rgba(0, 7, 17, 0.29) 100%); height: 150px; border-radius:20px">
            <div class="card-body">
                <div class="row g-0 text-left">
                    <div class="col-sm-6">
                        <p class="rounded-pill" style="padding:0px 10px; font-weight:bold; display: inline-block; font-size:12px; background-color:#F66;">Tidak Tersedia</p>
                        <h5 style="color: white; font-weight:500">Lantai G</h5>
                        <p style="color:white; font-size:12px">Di Depan Ruang Userti</p>
                    </div>
                    <div class="vr" style="height: 100px; background-color:black"></div>
                    <div class="col-sm-5 align-self-center" style="color: white">
                        <p style="margin:0; font-size:16px">Akses</p>
                        <h5 style="margin:0; font-weight:bold">UMUM</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection     
<script>
    $(function () {
        function updateView(sortedData) {
            $('#Monitoring_data').empty();

            $.each(sortedData, function (index, dispenser) {
                var availabilityClass = dispenser.dis_ketersediaan == 1 ? "bg-success" : "bg_danger2";
                var availabilityText = dispenser.dis_ketersediaan == 1 ? "Tersedia" : "Tidak Tersedia";

                var cardHtml = `
                        <div class="col-lg-3 mb-3">
                            <div class="card" id="gradient2" style="height: 150px; border-radius:20px">
                                <div class="card-body">
                                    <div class="row g-0 text-left">
                                        <div class="col-sm-6">
                                            <p class="rounded-pill ${availabilityClass}" style="padding: 0 10px; font-weight: bold; display: inline-block; font-size: 12px;">${availabilityText}</p>
                                            <h5 style="color: white; font-weight:500">Lantai ${dispenser.dis_lantai}</h5>
                                            <p style="color:white; font-size:12px">${dispenser.dis_lokasi}</p>
                                        </div>
                                        <div class="vr" style="height: 100px; background-color:black"></div>
                                        <div class="col-sm-5 align-self-center" style="color: white">
                                            <p style="margin:0; font-size:16px">Akses</p>
                                            <h5 style="margin:0; font-weight:bold">${dispenser.dis_access == 1 ? "UMUM" : "NON UMUM"}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>`;

                $('#Monitoring_data').append(cardHtml);
            });
        }

        $('#Monitoring_filterTersedia').click(function (e) {
            updateView(sortedData);
        });

        $('#Monitoring_filterTIdakTersedia').click(function (e) {
            updateView(sortedData);
        });
    });
</script>

