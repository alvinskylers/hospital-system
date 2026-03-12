@extends('admin.main')

@section('doctors-add')
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Add New Doctor</h4>
            </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="doctor_name" class="form-label">Doctor Name</label>
                        <input type="text" class="form-control" id="doctor_name" name="doctor_name" placeholder="e.g. Dr. John Doe">
                    </div>

                    <div class="mb-3">
                        <label for="doctor_speciality" class="form-label">Speciality</label>
                        <input type="text" class="form-control" id="doctor_speciality" name="doctor_speciality" placeholder="e.g. Cardiology">
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="doctor_phone" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="doctor_phone" name="doctor_phone" placeholder="e.g. +1 234 567 890">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="room_number" class="form-label">Room Number</label>
                            <input type="text" class="form-control" id="room_number" name="room_number" placeholder="e.g. 404">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="doctor_image" class="form-label">Upload Doctor Image</label>
                        <input class="form-control" type="file" id="doctor_image" name="doctor_image">
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">Save Doctor Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
