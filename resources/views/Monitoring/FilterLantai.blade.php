@*
    For more information on enabling MVC for empty projects, visit https://go.microsoft.com/fwlink/?LinkID=397860
*@
@model List<SistemMonitoringGalonMVC.Models.DispenserModel>
@{
    ViewData["Page"] = "Monitoring - Filter Lantai";
}
<p class="mb-3" style="font-size:30px; font-weight: 700;">Lantai @TempData["Lantai"]</p>
<p class="rounded-pill text-center badge_custom tersedia">Tersedia</p>
<div class="row mb-3">
    @foreach(var dispenser in Model){
        @if (dispenser.dis_ketersediaan == 1)
        {
            <div class="col-sm-3 mb-3">
                <div class="card" id="gradient2" style="height: 150px; border-radius:20px">
                    <div class="card-body">
                        <div class="row g-0 text-left">
                            <div class="col-sm-6">
                                <p class="rounded-pill badge_custom-sm tersedia">Tersedia</p>
                                <h5 style="color: white; font-weight:500">Lantai @dispenser.dis_lantai</h5>
                                <p style="color:white; font-size:12px">@dispenser.dis_lokasi</p>
                            </div>
                            <div class="vr" style="height: 100px; background-color:black"></div>
                            <div class="col-sm-5 align-self-center" style="color: white">
                                <p style="margin:0; font-size:16px">Akses</p>
                                <h5 style="margin:0; font-weight:bold">
                                    @(dispenser.dis_access == 1 ? "UMUM" : "NON UMUM")
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        }
    }
</div>
<br />
<p class="rounded-pill text-center badge_custom tidak_tersedia">Tidak Tersedia</p>
<div class="row mb-3">
    @foreach (var dispenser in Model)
    {
        @if (dispenser.dis_ketersediaan == 0)
        {
            <div class="col-sm-3 mb-3">
                <div class="card" id="gradient2" style="height: 150px; border-radius:20px">
                    <div class="card-body">
                        <div class="row g-0 text-left">
                            <div class="col-sm-6">
                                <p class="rounded-pill badge_custom-sm tidak_tersedia">Tidak Tersedia</p>
                                <h5 style="color: white; font-weight:500">Lantai @dispenser.dis_lantai</h5>
                                <p style="color:white; font-size:12px">@dispenser.dis_lokasi</p>
                            </div>
                            <div class="vr" style="height: 100px; background-color:black"></div>
                            <div class="col-sm-5 align-self-center" style="color: white">
                                <p style="margin:0; font-size:16px">Akses</p>
                                <h5 style="margin:0; font-weight:bold">
                                    @(dispenser.dis_access == 1 ? "UMUM" : "NON UMUM")
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        }
    }
</div>
<br />