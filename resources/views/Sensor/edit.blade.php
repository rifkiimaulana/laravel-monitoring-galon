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
            Edit Sensor
        </h5>
    </div>
    <div class="card-body">
    <form method="post" action="{{ route('Sensor.edit', ['sen_id' => $sensor->sen_id]) }}">
    @csrf
    @method('GET')
    
    <div class="row">
        <input type="hidden" name="sen_id" value="{{ $sensor->sen_id }}">
        <div class="col-lg-4 form-group">
            <label style="font-weight: bold;" for="sen_nama">Nama Sensor<b style="color: red">*</b></label><br>
            <input name="sen_nama" value="{{ old('sen_nama', $sensor->sen_nama) }}" class="form-control" type="text" maxlength="6" id="MainContent_addSender" style="display: inline;">
            @error('sen_nama')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="mb-3"></div>
        </div>
        <div class="col-lg-7 form-group">
            <label style="font-weight: bold;" for="sen_status_pemakaian">Status Pemakaian<b style="color: red">*</b></label><br>
            <input name="sen_status_pemakaian" value="{{ old('sen_status_pemakaian', $sensor->sen_status_pemakaian) }}" class="form-control" type="text" maxlength="25" id="MainContent_addSender" style="display: inline;">
            @error('sen_status_pemakaian')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="mb-3"></div>
        </div>
        <div class="col-lg-7 form-group">
            <label style="font-weight: bold;" for="sen_status">Status <b style="color: red">*</b></label><br>
            <input name="sen_status" value="{{ old('sen_status', $sensor->sen_status) }}" class="form-control" type="text" maxlength="25" id="MainContent_addSender" style="display: inline;">
            @error('sen_status')
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