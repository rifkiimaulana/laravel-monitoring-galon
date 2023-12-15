    @extends('home')

    @section('content')
        <div>
            <div class="md-form input-group mb-4" style="margin-top: 0px; margin-bottom: 15px !important;">
                <a class="btn btn-primary rounded-pill waves-effect waves-light" href="/Dispenser/create" style="padding: 10px 30px;">
                    <i class="fas fa-plus"></i>
                </a>
                <input name="ctl00$MainContent$txtCari" type="text" id="MainContent_txtCari" class="form-control form-cari" placeholder="Cari" />
            </div>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close dismiss-icon" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <table class="table table-sm table-hover table-bordered" style="width:100%;">
                <thead>
                    <tr>
                        <th class="text-center" scope="col" style="background-color: #4285f4; color:white; font-weight:bold">No</th>
                        <th class="text-center" scope="col" style="background-color: #4285f4; color:white; font-weight:bold">ID Device</th>
                        <th class="text-center" scope="col" style="background-color: #4285f4; color:white; font-weight:bold">ID Dispenser</th>
                        <th class="text-center" scope="col" style="background-color: #4285f4; color:white; font-weight:bold">ID Sensor</th>
                        <th class="text-center" scope="col" style="background-color: #4285f4; color:white; font-weight:bold">Status</th>
                        <th class="text-center" scope="col" style="background-color: #4285f4; color:white; font-weight:bold">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    @endsection
