@extends('admin.main')

@section('doctors-list')
    <div class="container py-5 bg-white">
        <div class="d-flex justify-content-between align-items-center mb-5 border-bottom pb-4">
            <div>
                <h2 class="fw-bold text-dark mb-0">Medical Staff Directory</h2>
                <p class="text-muted mb-0 small">Active personnel management</p>
            </div>
            <a href="{{ route('doctors-add')}}" class="btn btn-primary rounded-pill px-4 fw-bold shadow-sm">
                <i class="bi bi-plus-lg me-2"></i>Register New Doctor
            </a>
        </div>

        @if(session('success-doctor-deleted'))
            <div class="alert alert-danger alert-dismissible fade show shadow-sm d-flex align-items-center" role="alert">
                <i class="bi bi-check-circle-fill me-2 fs-5"></i>

                <div>
                    <strong>Success!</strong> {{ session('success-doctor-deleted') }}
                </div>
            </div>
        @endif

        <div class="row g-0">
            @foreach($doctors as $doctor)
                <div class="col-12 border rounded-4 mb-3 bg-white staff-row">
                    <div class="card-body p-3">
                        <div class="row align-items-center text-center text-md-start">

                            <div class="col-md-3 border-end-md">
                                <div class="d-flex align-items-center ps-md-2">
                                    <img src="{{ asset('images/' . $doctor->doctor_image) }}"
                                         class="rounded-circle border border-2 border-light shadow-sm"
                                         style="width: 65px; height: 65px; object-fit: cover;" alt="">
                                    <div class="ms-3 text-start">
                                        <h6 class="fw-bold mb-0 text-dark">{{ $doctor->doctor_name }}</h6>
                                        <small class="text-primary fw-semibold">{{ $doctor->doctor_specialty }}</small>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 my-3 my-md-0">
                                <div class="row align-items-center">
                                    <div class="col-6 border-end">
                                        <div class="text-center">
                                            <small class="text-muted d-block label-text">ASSIGNED ROOM</small>
                                            <span class="fw-bold fs-5 text-dark">
                                        <i class="bi bi-door-open text-primary me-1"></i>{{ $doctor->room_number }}
                                    </span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-center">
                                            <small class="text-muted d-block label-text">DIRECT LINE</small>
                                            <span class="fw-bold fs-6 text-dark">
                                        <i class="bi bi-telephone text-primary me-1"></i>{{ $doctor->doctor_phone }}
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 text-md-end text-center border-start-md">
                                <div class="d-inline-flex gap-3 pe-md-2">
                                    <a href="{{ route('doctor-edit', $doctor->id) }}" class="btn btn-outline-primary btn-sm rounded-pill px-3 fw-bold border-2" >
                                        <i class="bi bi-pencil-square me-1"></i> Edit
                                    </a>
                                    <a href="{{ route('doctor-delete', $doctor->id) }}" class="btn btn-outline-danger btn-sm rounded-pill px-3 fw-bold border-2" onclick="return confirm('are you sure?')">
                                        <i class="bi bi-trash3 me-1"></i> Remove
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <style>
        .bg-white { background-color: #ffffff !important; }

        .staff-row {
            transition: all 0.2s ease-in-out;
            border-color: #f0f0f0 !important;
        }

        .staff-row:hover {
            border-color: #0d6efd !important;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }

        .label-text {
            font-size: 0.6rem;
            letter-spacing: 1.2px;
            font-weight: 800;
            margin-bottom: 4px;
        }

        /* Custom Responsive Borders */
        @media (min-width: 768px) {
            .border-end-md { border-right: 1px solid #f0f0f0 !important; }
            .border-start-md { border-left: 1px solid #f0f0f0 !important; }
        }
    </style>
@endsection
