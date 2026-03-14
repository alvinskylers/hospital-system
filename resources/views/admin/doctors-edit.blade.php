@extends('admin.main')
<base href="/public">
@section('doctors-edit')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <div class="container mt-5">

        @if(session('success-doctor-updated'))
            <div class="alert alert-success alert-dismissible fade show shadow-sm d-flex align-items-center" role="alert">
                <i class="bi bi-check-circle-fill me-2 fs-5"></i>

                <div>
                    <strong>Success!</strong> {{ session('success-doctor-updated') }}
                </div>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">x</button>
            </div>
        @endif

        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0 text-center">Edit Doctor Data</h4>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('doctor-update', $doctor->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bold">Doctor Name</label>
                        <input value="{{ $doctor->doctor_name }}" type="text" class="form-control" name="doctor_name" placeholder="Enter doctor name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Speciality</label>
                        <input value="{{ $doctor->doctor_specialty }}" type="text" class="form-control" name="doctor_specialty" placeholder="Enter speciality">
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Phone Number</label>
                            <input value="{{ $doctor->doctor_phone }}" type="text" class="form-control" name="doctor_phone" placeholder="Enter phone">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Room Number</label>
                            <input value="{{ $doctor->room_number }}" type="text" class="form-control" name="room_number" placeholder="Enter room">
                        </div>
                    </div>

                    <div class="mb-4">
                        <img src="{{ asset('images/' . $doctor->doctor_image) }}"
                        class="rounded-circle border-2 border-light shadow-sm"
                        style="width: 65px; height: 65px; object-fit: cover;" alt="">
                        <label class="form-label fw-bold">Old Doctor Image</label>

                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Upload New Doctor Image</label>
                        <input  value="{{ $doctor->doctor_image }}" class="form-control" type="file" name="doctor_image">
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-success btn-lg">Update Doctor Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
