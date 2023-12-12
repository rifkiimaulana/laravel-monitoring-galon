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
            Tambah Dispenser Baru
        </h5>
    </div>
    <div class="card-body">
        <form method="post" asp-controller="Dispenser" asp-action="Create">
            <div class="row">
                <input asp-for="dis_id" value="XXXX" type="hidden"/>
                <div class="col-lg-4 form-group">
                    <label style="font-weight: bold;" for="addSender">ID Mikrocontroller<b style="color: red">*</b></label><br>
                    <input asp-for="dis_mikrocontrollerId" class="form-control" name="dis_mikrocontrollerId" type="text" maxlength="6" id="MainContent_addSender" style=" display: inline;">
                    <span asp-validation-for="dis_mikrocontrollerId" class="text-danger" ></span>
                    <div class="mb-3"></div>
                </div>
                <div class="col-lg-3 form-group">
                    <label style="font-weight: bold;" for="addJudul">Akses <b style="color: red; margin-right:2px" >*</b></label><br>
                    <select asp-for="dis_access" class="form-control form-select" name="dis_access" aria-label="Default select example">
                        <option selected value="">Pilih Akses</option>
                        <option value="1">Umum</option>
                        <option value="0">Non Umum</option>
                    </select>
                    <span asp-validation-for="dis_access" class="text-danger"></span>
                    <div class="mb-3"></div>
                </div>
                <div class="col-lg-7 form-group">
                    <label style="font-weight: bold;" for="addJudul">Lantai <b style="color: red; margin-right:2px">*</b></label><br>
                    <select asp-for="dis_lantai" class="form-control form-select" name="dis_lantai" aria-label="Default select example">
                        <option selected value="">Pilih Lantai</option>
                        <option value="G">Lantai G</option>
                        <option value="1">Lantai 1</option>
                        <option value="2">Lantai 2</option>
                    </select>
                    <span asp-validation-for="dis_lantai" class="text-danger"></span>
                    <div class="mb-3"></div>
                </div>
                <div class="col-lg-7 form-group">
                    <label style="font-weight: bold;" for="addSender">Lokasi<b style="color: red">*</b></label><br>
                    <input asp-for="dis_lokasi" class="form-control" name="dis_lokasi" type="text" maxlength="25" id="MainContent_addSender" style=" display: inline;">
                    <span asp-validation-for="dis_lokasi" class="text-danger"></span>
                    <div class="mb-3"></div>
                </div>
            </div>
            <div class="form-group float-right" style="margin-bottom: 15px;">
                <a id="MainContent_linkCancelAdd" class="btn btn-secondary" asp-action="Index">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection