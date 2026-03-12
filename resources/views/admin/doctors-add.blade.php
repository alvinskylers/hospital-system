@extends('admin.main')

@section('doctors-add')\
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <div class="container mt-5">

        @if(session('success-doctor-added'))
            <div class="alert alert-success alert-dismissible fade show shadow-sm d-flex align-items-center" role="alert">
                <i class="bi bi-check-circle-fill me-2 fs-5"></i>

                <div>
                    <strong>Success!</strong> {{ session('success-doctor-added') }}
                </div>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">x</button>
            </div>
        @endif

        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0 text-center">Add New Doctor</h4>
            </div>
            <div class="card-body p-4">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label fw-bold">Doctor Name</label>
                        <input type="text" class="form-control" name="doctor_name" placeholder="Enter doctor name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Speciality</label>
                        <input type="text" class="form-control" name="doctor_speciality" placeholder="Enter speciality">
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Phone Number</label>
                            <input type="text" class="form-control" name="doctor_phone" placeholder="Enter phone">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Room Number</label>
                            <input type="text" class="form-control" name="room_number" placeholder="Enter room">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Upload Doctor Image</label>
                        <input class="form-control" type="file" name="doctor_image">
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-success btn-lg">Add Doctor to Database</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
