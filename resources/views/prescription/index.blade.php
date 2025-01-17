<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mt-4"><i>Hospital Management System (HMS)</i></h1>
        <h2 class="text-center mt-2"><i>Prescription Index Page!</i></h2>
        <a href="{{route('doctor.index')}}" class="btn btn-primary">Add Doctor</a>
        <a href="{{route('patient.index')}}" class="btn btn-success">Add Patient</a>
        <a href="{{route('appointment.create')}}" class="btn btn-dark">Add Appointment</a>
        <a href="{{route('prescription.create')}}" class="btn btn-danger">Add Prescription</a>
        <table class="table table-bordered table-striped mt-3">
            <thead>
                <th>Appointment</th>
                <th>Medication List</th>
                <th>Note</th>
                <th>Show</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @forelse ($prescription as $item)
                    <tr>
                        <td>{{ $item->appointment->appointmentdate }}</td>
                        <td>{{ $item->medication_list }}</td>
                        <td>{{ $item->note }}</td>
                        <td><a href="" class="btn btn-primary">Show</a></td>
                        <td><a href="" class="btn btn-success">Edit</a></td>
                        <td><a href="" class="btn btn-danger">Delete</a></td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-center" colspan="6">No Record Found</td>
                    </tr>
                @endforelse 
            </tbody>
        </table>
    </div>
</body>
</html>