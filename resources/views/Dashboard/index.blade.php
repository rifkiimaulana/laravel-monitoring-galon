<!-- resources/views/dashboard.blade.php -->
@extends('home')

@section('content')
    <div class="row">

        <div class="col-sm-4 mb-2">
            <div class="card" id="gradient2" style="height: 150px; border-radius:20px;">
                <div class="card-body text-white">
                   <div style="text-align:left;">
                    <h5 style="font-size: 18px;">Jumlah Keseluruhan Galon</h5>
                    <p style="font-size: 70px; font-weight: bold;">5</p>
                    </div>
                 </div>
            </div>
        </div>

        <div class="col-sm-4 mb-2">
            <div class="card" id="gradient2" style="height: 150px; border-radius:20px;">
                <div class="card-body text-white">
                    <div style="text-align:left;">
                        <h5 style="font-size: 18px;">Jumlah Stok Sisa</h5>
                        <p style="font-size: 70px; font-weight: bold;">5</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mb-2">
            <div class="card" id="gradient2" style="height: 150px; border-radius:20px;">
                <div class="card-body text-white">
                    <div style="text-align:left;">
                        <h5 style="font-size: 18px;">Jumlah Stok Kosong</h5>        
                        <p style="font-size: 70px; font-weight: bold;">5</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card" id="gradient2" style="height: 160px; border-radius:20px;">
                    <div class="card-body text-white">
                        <div class="row">
                            <div class="col-sm-7" style="text-align: left">
                                <h3 class="mb-4"style="font-size:bold 18px;">Penggunaan Galon Terbanyak Hari Ini</h3>
                                <h5 style="font-weight:bold;">Lantai 1</h5>
                                <p style="font-size:15px;">Di Depan Ruang Userti</p>
                            </div>
                            <div class="col-sm-5 justify-content-center" style="text-align: Left">
                                <h1 style="font-weight:bold; font-size:90px">5</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    <style type="text/css">
        #gradient2 {
            background-image: linear-gradient(90deg, #0B4499 0.01%, #0059AB 0.02%, rgba(71, 111, 172, 0.81) 50.52%, rgba(68, 109, 171, 0.72) 59.9%, rgba(0, 7, 17, 0.29) 100%);
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const ctx = document.getElementById('myChart');

            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: 'Grafik Penggunaan Galon',
                        data: [30, 19, 3, 5, 2, 3],
                        borderWidth: 1
                    }]
                }
            });
        });
</script>

