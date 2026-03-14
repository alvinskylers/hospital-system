@extends('admin.main')

@section('appointments-view')

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Submission</th>
                <th>Speciality</th>
                <th>Phone</th>
                <th>Message</th>
                <th>status</th>
            </tr>
        </thead>
        <tbody>
        @foreach($appointments as $appointment)
            <tr>
                <td>{{ $appointment->full_name }}</td>
                <td>{{ $appointment->email_address }}</td>
                <td>{{ $appointment->submission_date }}</td>
                <td>{{ $appointment->speciality }}</td>
                <td>{{ $appointment->number }}</td>
                <td>{{ $appointment->message }}</td>
                <td>{{ $appointment->status }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
