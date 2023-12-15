    @extends('home')

    @section('content')
        <div>
            <div class="md-form input-group mb-4" style="margin-top: 0px; margin-bottom: 15px !important;">
                <a class="btn btn-primary rounded-pill waves-effect waves-light" href="/Sensor/create" style="padding: 10px 30px;">
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
                        <th class="text-center" scope="col" style="background-color: #4285f4; color:white; font-weight:bold">ID Sensor</th>
                        <th class="text-center" scope="col" style="background-color: #4285f4; color:white; font-weight:bold">Nama Sensor</th>
                        <th class="text-center" scope="col" style="background-color: #4285f4; color:white; font-weight:bold">Status Pemakaian</th>
                        <th class="text-center" scope="col" style="background-color: #4285f4; color:white; font-weight:bold">Status</th>
                        <th class="text-center" scope="col" style="background-color: #4285f4; color:white; font-weight:bold">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data_sensor as $sensor)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $sensor->sen_id }}</td>
                            <td>{{ $sensor->sen_nama }}</td>
                            <td>{{ $sensor->sen_status_pemakaian }}</td>
                            <td>{{ $sensor->sen_status}}</td>
                            <td class="text-center">
                                <div class="dropdown">
                                    <a data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-list fa-sm" style="color: #4285f4;"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('Sensor.edit', ['sen_id' => $sensor->sen_id]) }}">
                                                <i class="fa-solid fa-pen-to-square" style="margin-right:7px"></i>Edit
                                            </a>
                                        </li>
                                        <li>
                                        <form method="POST" action="{{ route('Sensor.delete', ['sen_id' => $sensor->sen_id]) }}">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="dropdown-item">
                                                <i class="fa-solid fa-trash" style="margin-right:7px"></i>Hapus
                                            </button>
                                        </form>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="11">
                                No records found!
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    @endsection
