<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@ViewData["Title"] - SistemMonitoringGalonMVC</title>
    <link rel="stylesheet" href="~/lib/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="~/css/site.css" asp-append-version="true" />
    <link rel="stylesheet" href="~/SistemMonitoringGalonMVC.styles.css" asp-append-version="true" />

  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" />

    <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

 
    <script src="https://kit.fontawesome.com/f4320494c4.js" crossorigin="anonymous"></script>

 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <link rel="shortcut icon" href="/PoliteknikAstra/favicon.png" />
    <link href="{{ asset('assets/Plugins/MDB-Pro_4.14.1/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/Plugins/MDB-Pro_4.14.1/css/mdb.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/Plugins/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/Plugins/fontawesome-free-5.11.2-web/css/fontawesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/Plugins/fontawesome-free-5.11.2-web/css/solid.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/Content/themes/base/jquery-ui.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/Styles/Style.css') }}" rel="stylesheet" />
    
    <script src="{{ asset('assets/Scripts/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/Scripts/jquery-ui-1.12.1.min.js') }}"></script>
    <script src="{{ asset('assets/Plugins/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/Plugins/fontawesome-free-5.11.2-web/js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('assets/Scripts/popper.min.js') }}"></script>
    <script src="{{ asset('assets/Scripts/tooltip.min.js') }}"></script>
    <script src="{{ asset('assets/Scripts/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/Plugins/MDB-Pro_4.14.1/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/Plugins/MDB-Pro_4.14.1/js/mdb.min.js') }}"></script>
    <script src="{{ asset('assets/Plugins/Highcharts-7.2.1/code/highcharts.js') }}"></script>
    <script src="{{ asset('assets/Plugins/Highcharts-7.2.1/code/highcharts-more.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function changestate(param) {
            if (param === "open") {
                $(".panelmenu").css("visibility", "visible");
                $("#menuOpen").css({ "cursor": "pointer", "display": "none" });
                $("#menuClose").css({ "cursor": "pointer", "display": "" });
            }
            else {
                $(".panelmenu").css("visibility", "hidden");
                $("#menuOpen").css({ "cursor": "pointer", "display": "" });
                $("#menuClose").css({ "cursor": "pointer", "display": "none" });
            }
        }

        $(document).ready(function () {
            $.ajax({
                type: "POST",
                url: "Default.aspx/getLibur",
                contentType: "application/json; charset=utf-8",
                data: '{ query: "" }',
                success: function (r) {
                    let result = jQuery.parseJSON(r.d);
                    let libur = [];
                    libur.push(1);
                    libur.push(7);

                    $.each(result, function (key, entry) {
                        libur.push(new Date(entry.libur));
                    });

                    $(".datepicker").pickadate({
                        monthsFull: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                        monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agt', 'Sep', 'Okt', 'Nov', 'Des'],
                        weekdaysFull: ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'],
                        weekdaysShort: ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'],
                        today: 'Hari Ini',
                        clear: '',
                        close: 'Tutup',
                        labelMonthNext: 'Bulan berikutnya',
                        labelMonthPrev: 'Bulan sebelumnya',
                        labelMonthSelect: 'Pilih bulan',
                        labelYearSelect: 'Pilih tahun',
                        format: 'yyyy-mm-dd',
                        closeOnSelect: false,
                        closeOnClear: false,
                        disable: libur,
                        onOpen: function () {
                            $(".picker__day--disabled").css("background", "#ff928a");
                            $(".picker__day--disabled").css("color", "#fff");
                            $(".picker__day--disabled").css("border", "solid 1px #fff");
                        },
                        onSet: function (context) {
                            $(".picker__day--disabled").css("background", "#ff928a");
                            $(".picker__day--disabled").css("color", "#fff");
                            $(".picker__day--disabled").css("border", "solid 1px #fff");
                        }
                    });
                },
                failure: function () { }
            });
        });

        $(function () {
            $('[data-toggle="popover"]').popover()
        })

        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

        function sentValidation(input) {
            $(input).addClass('disabled');
            $(input).text('Mohon tunggu..');
        }
    </script>
</head>
<body>
    <div class="container-fluid position-fixed">
        <div class="row">
            <div class="col panelheader">
                <i id="menuOpen" class="fas fa-bars fa-2x iconmenu" style="cursor: pointer;" onclick="changestate('open');"></i>
                <i id="menuClose" class="fas fa-times fa-2x iconclose" style="cursor: pointer; display: none;" onclick="changestate('close');"></i>
                <img id="imgLogo"  src="{{ asset('assets/Images/IMG_Logo.png') }}" style="height: 40px; margin-top: -18px; cursor: pointer;" />
                <div class="panelauthentication">
                    <b style="font-weight:bold">yosep.setiawan (KARYAWAN)</b><br><span style='font-size: 11px'>Login terakhir: 29 November 2023, 16:04 WIB</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 panelmenu" style="background-color: #fff;">
                <div class="scrollstyle" style="overflow-y: auto; height: 100%;">
                    <ul class="list-group" style="font-size: 14px;">
                        <li class='list-group-item border border-0 panelauthenticationmobile' style='background-color: #FFFFC0;'>Hai, <b>yosep.setiawan (KARYAWAN)</b></li>
                        <li class='list-group-item border border-0 hovermenu' style='cursor: pointer;' onclick="window.location.href='http://localhost/web_intra//Page_Logout.aspx';"><i class='fas fa-sign-out-alt' style='margin-right: 7px;'></i><b>Logout</b></li>
                        <a href="{{route('Dashboard')}}" style="color:black">
                            <li class='list-group-item border border-0 hovermenu' style='cursor: pointer;'><i class='fas fa-home' style='margin-right: 7px;'></i><b>Dashboard</b></li>
                        </a>
                        <div class='accordion' id='accordionMenu'>
                            <a href="{{route('Monitoring')}}" style="color:black">
                                <li class='list-group-item border border-0 active' style='cursor: pointer;'><b><i class="fa-solid fa-gauge" style="margin-right: 7px;"></i>Monitoring</b></li>
                            </a>
                            <a href="{{route('Dispenser')}}"  style="color:black">
                                <li class='list-group-item border border-0' style='cursor: pointer;'><b><i class="fa-solid fa-glass-water-droplet" style='margin-right: 7px;'></i>Kelola Dispenser</b></li></a>
                            <a href="{{route('InventarisGalon')}}" style="color:black">
                                <li class='list-group-item border border-0' style='cursor: pointer;'><b><i class="fa-solid fa-bottle-water" style='margin-right: 7px;'></i>Kelola Galon</b></li>
                            </a>
                        </div>
                        <li class='list-group-item border border-0 hovermenu' style='cursor: pointer;' onclick="window.location.href='http://localhost/web_intra//Page_Redirect_SSO.aspx';"><i class='fas fa-external-link-alt' style='margin-right: 7px;'></i><b>Halaman SSO</b></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col panelcontent panelcontentweb" style="font-size: 14px;">
            <div class="scrollstyle" style="overflow-y: auto; height: 100%; padding-right: 15px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="padding: 0; margin: 0; background-color: #FFF;">
                        <li class="breadcrumb-item text-primary">
                            <b>
                                Sistem Monitoring Dispenser
                            </b>
                        </li>
                        <li class="breadcrumb-item active"><b>@ViewData["Page"]</b></li>
                    </ol>
                </nav>
                <hr style="margin-top: .8em; border:0.1px;" />
                <div id="MainContent_panelData" >

                    <main role="main" class="pb-3">
                    @yield('content')
                    </main>
                    <br />
                    <br />
                    <br />
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('lib/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/site.js') }}" asp-append-version="true"></script>   
</body>
</html>