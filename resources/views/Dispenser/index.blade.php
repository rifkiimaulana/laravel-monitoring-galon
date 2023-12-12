@extends('home')

@section('content')
<div>
    <div class="md-form input-group mb-4" style="margin-top: 0px; margin-bottom: 15px !important;">
        <a class="btn btn-primary rounded-pill waves-effect waves-light" href="{{ route('Dispenser.create') }}" style="padding: 10px 30px;">
            <i class="fas fa-plus"></i>
        </a>
    </div>

    @if (session('successMessage'))
        <div class="row">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                <strong class="alert-message-custom">Sukses!</strong> {{ session('successMessage') }}
                <button type="button" class="btn-close alert-message-custom" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    <table id="example" class="table table-sm table-hover table-bordered" style="width:100%;">
    <thead>
        <tr>
            <th class="text-center" scope="row" style="background-color: #4285f4; color:white; font-weight:bold">No</th>
            <th class="text-center" scope="col" style="background-color: #4285f4; color:white;font-weight:bold">ID Dispenser</th>
            <th class="text-center" scope="col" style="background-color: #4285f4; color:white;font-weight:bold">ID Mikrocontroller</th>
            <th class="text-center" scope="col" style="background-color: #4285f4; color:white;font-weight:bold">Akses</th>
            <th class="text-center" scope="col" style="background-color: #4285f4; color:white;font-weight:bold">Lantai</th>
            <th class="text-center" scope="col" style="background-color: #4285f4; color:white;font-weight:bold">Lokasi</th>
            <th class="text-center" scope="col" style="background-color: #4285f4; color:white;font-weight:bold">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <td class="text-center">
            <div class="dropdown">
                <a data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-list fa-sm" style="color: #4285f4;"></i>
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('Dispenser.edit')}}"  asp-route-id="@dispenser.dis_id" ><i class="fa-solid fa-pen-to-square" style="margin-right:7px"></i>Edit</a></li>
                <li><a class="dropdown-item delete-button" data-dis_id="@dispenser.dis_id"><i class="fa-solid fa-trash" style="margin-right:7px"></i>Hapus</a></li>
                </ul>
            </div>
        </td>     
    </tbody>
    <tfoot>
        <tr>
            <th class="text-center" scope="row" style="background-color: #4285f4; color:white; font-weight:bold">No</th>
            <th class="text-center" scope="col" style="background-color: #4285f4; color:white;font-weight:bold">ID Dispenser</th>
            <th class="text-center" scope="col" style="background-color: #4285f4; color:white;font-weight:bold">ID Mikrocontroller</th>
            <th class="text-center" scope="col" style="background-color: #4285f4; color:white;font-weight:bold">Akses</th>
            <th class="text-center" scope="col" style="background-color: #4285f4; color:white;font-weight:bold">Lantai</th>
            <th class="text-center" scope="col" style="background-color: #4285f4; color:white;font-weight:bold">Lokasi</th>
            <th class="text-center" scope="col" style="background-color: #4285f4; color:white;font-weight:bold">Aksi</th>
        </tr>
    </tfoot>
</table>
</div>
@endsection
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });

    $(document).ready(function () {
        $(".delete-button").click(function () {
            var dis_id = $(this).data("dis_id");

            swal.fire({
                title: "Hapus Dispenser?",
                text: "Apakah Anda yakin ingin menghapus dispenser ini?",
                icon: "warning",
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'Ya',
                denyButtonText: 'Tidak',
                dangerMode: true,
            }).then((result) => {
                if (result.value) {
                    // Mengirimkan permintaan penghapusan ke controller
                    $.ajax({
                        url: "/dispenser/" + dis_id,
                        type: "DELETE",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (data) {
                            // Tampilkan pesan sukses jika diperlukan
                            if (data.success) {
                                swal.fire("Sukses!", data.message, "success");
                                // Refresh halaman setelah menghapus
                                location.reload();
                            } else {
                                swal.fire("Gagal!", data.message, "error");
                            }
                        },
                        error: function () {
                            swal.fire("Error!", "Terjadi kesalahan saat menghapus dispenser!.", "error");
                        }
                    });
                } else {
                    swal.fire("Batal!", "Dispenser batal dihapus!", "error");
                }
            });
        });
    });
</script>
