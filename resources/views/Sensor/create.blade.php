@extends('home')

@section('content')
<style>
    #map-container {
        position: relative;
    }

    .marker {
        position: absolute;
        width: 15px;
        height: 15px;
        background-color: red;
        border-radius: 50%;
        cursor: pointer;
        user-select: none;
    }
</style>
<div class="card">
    <div class="card-header" style="background-color: #4285f4; color: white;">
        <h5 style="margin: 0;">
            Tambah Sensor Baru
        </h5>
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('Dispenser.store')}}">
            @csrf
            <div class="row">
                <input asp-for="dis_id" value="DSP001x  " type="hidden"/>
                <div class="col-lg-4 form-group">
                    <label style="font-weight: bold;" for="addSender">Nama Sensor<b style="color: red">*</b></label><br>
                    <input asp-for="sen_nama" class="form-control" name="sen_nama" type="text" maxlength="6" id="MainContent_addSender" style=" display: inline;">
                    <span asp-validation-for="sen_nama" class="text-danger" ></span>
                    <div class="mb-3"></div>
                </div>
                <div class="col-lg-7 form-group">
                    <label style="font-weight: bold;" for="addSender">Status Pemakaian<b style="color: red">*</b></label><br>
                    <input asp-for="sen_status_pemakaian" class="form-control" name="sen_status_pemakaian" type="numeric" maxlength="25" id="MainContent_addSender" style=" display: inline;">
                    <span asp-validation-for="sen_status_pemakaian" class="text-danger"></span>
                    <div class="mb-3"></div>
                </div>
                <div class="col-lg-7 form-group">
                    <label style="font-weight: bold;" for="addSender">Status<b style="color: red">*</b></label><br>
                    <input asp-for="sen_status" class="form-control" name="sen_status" type="numeric" maxlength="25" id="MainContent_addSender" style=" display: inline;">
                    <span asp-validation-for="sen_status" class="text-danger"></span>
                    <div class="mb-3"></div>
                </div>
                <div class="form-group float-right" style="margin-bottom: 15px;">
                <a id="MainContent_linkCancelAdd" class="btn btn-secondary" asp-action="Index">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
        </form>
    </div>
</div>
@endsection