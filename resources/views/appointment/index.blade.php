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
        <h1 class="text-center mb-4"><i>Hospital Management System (HMS)</i></h1>
        <a href="{{route('doctor.index')}}" class="btn btn-primary">Add Doctor</a>
        <a href="{{route('patient.index')}}" class="btn btn-success">Add Patient</a>
        <a href="{{route('appointment.create')}}" class="btn btn-dark">Add Appointment</a>
        <a href="{{route('prescription.index')}}" class="btn btn-info">Prescription</a>
        <table class="table table-bordered table-striped mt-3">
            <thead>
                <th>Doctor</th>
                <th>Doctor Picture</th>
                <th>Patient</th>
                <th>Patient Picture</th>
                <th>Appointment Date</th>
                <th>Show</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @forelse ($data as $item)
                    <tr>
                        <td>{{ $item->appointmentdoctor->name }}</td>
                        <td><img src="{{asset('storage/' .$item->doctor_picture)}}" style="width:60px;border-radius:8px;"></td>
                        <td>{{ $item->appointmentpatient->name }}</td>
                        <td><img src="{{asset('storage/' . $item->patient_picture)}}" style="width:60px;border-radius:8px;"></td>
                        <td>{{ $item->appointmentdate }}</td>
                        <td><a href="" class="btn btn-primary">Show</a></td>
                        <td><a href="" class="btn btn-success">Edit</a></td>
                        <td><a href="{{route('appointment.destroy',$item->id)}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-center" colspan="8">No Record Found</td>
                    </tr>
                @endforelse

            </tbody>
        </table>
        <div>
            {{$data->links()}}
        </div>
    </div>
    
</body>
</html>