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
            Edit Dispenser
        </h5>
    </div>
    <div class="card-body">
    <form method="post" action="{{ route('Dispenser.edit', ['dis_id' => $dispenser->dis_id]) }}">
    @csrf
    @method('GET')
    
    <div class="row">
        <input type="hidden" name="dis_id" value="{{ $dispenser->dis_id }}">
        <div class="col-lg-4 form-group">
            <label style="font-weight: bold;" for="dis_no_dispenser">No Sensor<b style="color: red">*</b></label><br>
            <input name="dis_no_dispenser" value="{{ old('dis_no_dispenser', $dispenser->dis_no_dispenser) }}" class="form-control" type="text" maxlength="6" id="MainContent_addSender" style="display: inline;">
            @error('dis_mikrocontrollerId')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="mb-3"></div>
        </div>
        <div class="col-lg-3 form-group">
            <label style="font-weight: bold;" for="dis_access">Akses <b style="color: red; margin-right:2px">*</b></label><br>
            <select name="dis_access" class="form-control form-select" aria-label="Default select example">
                <option value="" disabled>Pilih Akses</option>
                <option value="1" {{ old('dis_access', $dispenser->dis_access) == 1 ? 'selected' : '' }}>Umum</option>
                <option value="0" {{ old('dis_access', $dispenser->dis_access) == 0 ? 'selected' : '' }}>Non Umum</option>
            </select>
            @error('dis_access')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="mb-3"></div>
        </div>
        <div class="col-lg-7 form-group">
            <label style="font-weight: bold;" for="dis_lantai">Lantai <b style="color: red; margin-right:2px">*</b></label><br>
            <select name="dis_lantai" class="form-control form-select" aria-label="Default select example">
                <option value="" disabled>Pilih Lantai</option>
                <option value="G" {{ old('dis_lantai', $dispenser->dis_lantai) == 'G' ? 'selected' : '' }}>Lantai G</option>
                <option value="1" {{ old('dis_lantai', $dispenser->dis_lantai) == '1' ? 'selected' : '' }}>Lantai 1</option>
                <option value="2" {{ old('dis_lantai', $dispenser->dis_lantai) == '2' ? 'selected' : '' }}>Lantai 2</option>
            </select>
            @error('dis_lantai')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="mb-3"></div>
        </div>
        <div class="col-lg-7 form-group">
            <label style="font-weight: bold;" for="dis_lokasi">Lokasi<b style="color: red">*</b></label><br>
            <input name="dis_lokasi" value="{{ old('dis_lokasi', $dispenser->dis_lokasi) }}" class="form-control" type="text" maxlength="25" id="MainContent_addSender" style="display: inline;">
            @error('dis_lokasi')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="mb-3"></div>
        </div>
    </div>
    <div class="float-right" style="margin-bottom: 15px;">
        <a id="MainContent_linkCancelAdd" class="btn btn-secondary" asp-action="Index">Batal</a>
        <button id="MainContent_linkSubmitAdd" type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>

    </div>
</div>
@endsection