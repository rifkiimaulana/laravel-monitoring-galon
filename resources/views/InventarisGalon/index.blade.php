@extends('home')

@section('content')
<div class="md-form input-group mb-4">
    <button class="btn btn-primary rounded-pill" style="padding: 10px 20px; color: white !important; font-weight: bold;" data-toggle="modal" data-target="#updateModal">Perbarui Data Galon</button>
</div>

<div class="row">
    @if (session('successMessage'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-1"></i>
            <strong class="alert-message-custom">Sukses!</strong> {{ session('successMessage') }}
            <button type="button" class="btn-close alert-message-custom" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        <div class="col-sm-4 mb-2">
            <div class="card" id="gradient2" style="background-image: linear-gradient(90deg, #0B4499 0.01%, #0059AB 0.02%, rgba(71, 111, 172, 0.81) 50.52%, rgba(68, 109, 171, 0.72) 59.9%, rgba(0, 7, 17, 0.29) 100%); height: 150px; border-radius:20px">
                <div class="card-body text-white">
                   <div style="text-align:left;">
                    <h5 style="font-size: 18px;">Jumlah Keseluruhan Galon</h5>
                    <p style="font-size: 70px; font-weight: bold;">5</p>
                    </div>
                 </div>
            </div>
        </div>
        <div class="col-sm-4 mb-2">
            <div class="card" id="gradient2" style="background-image: linear-gradient(90deg, #0B4499 0.01%, #0059AB 0.02%, rgba(71, 111, 172, 0.81) 50.52%, rgba(68, 109, 171, 0.72) 59.9%, rgba(0, 7, 17, 0.29) 100%); height: 150px; border-radius:20px">
                <div class="card-body text-white">
                    <div style="text-align:left;">
                        <h5 style="font-size: 18px;">Jumlah Stok Sisa</h5>
                        <p style="font-size: 70px; font-weight: bold;">5</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 mb-2">
            <div class="card" id="gradient2" style="background-image: linear-gradient(90deg, #0B4499 0.01%, #0059AB 0.02%, rgba(71, 111, 172, 0.81) 50.52%, rgba(68, 109, 171, 0.72) 59.9%, rgba(0, 7, 17, 0.29) 100%); height: 150px; border-radius:20px">
                <div class="card-body text-white">
                    <div style="text-align:left;">
                        <h5 style="font-size: 18px;">Jumlah Stok Kosong</h5>        
                        <p style="font-size: 70px; font-weight: bold;">5</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 20px; background-color: #F2F2F2;">
            <!-- Modal Header -->
            <div class="modal-header" style="background-color: #D9D9D9; border-radius: 18px 18px 0px 0px;">
                <h5 class="modal-title" id="updateModalLabel" style="font-weight: bold;">Perbarui Data Galon</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- Modal Body -->
                <div class="form-group modal-body">
                    <!-- Textbox for input -->
                    <label for="inv_jmlKeseluruhan">Jumlah Keseluruhan Galon:</label>
                    <input id="inv_jmlKeseluruhan" name="inv_jmlKeseluruhan" type="number" class="form-control" placeholder="Jumlah Keseluruhan Galon">
                </div>

                <!-- Modal Footer -->
                <div class="form-group modal-footer">
                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Perbarui</button>
                </div>
            </form>
        </div>
    </div>
</div>
<style>
    .modal-backdrop {
        display: none !important;
    }
</style>
@endsection
