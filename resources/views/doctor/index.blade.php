<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-4"><i>Hospital Management System (HMS)</i></h1>
        <h2 class="text-center mt-3"><i>Doctor Index Page!</i></h2>
        <a href="{{route('doctor.create')}}" class="btn btn-success">Add Doctor</a>
        <table class="table table-bordered table-striped mt-3">
            <thead>
                <th>Doctor Name</th>
                <th>Speciality</th>
                <th>Doctor Profile</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @forelse ($doctor as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->speciality }}</td>
                        <td><img src="{{asset('storage/' . $item->file)}}" style="width:50px;border-radius:8px;"></td>
                        <td><a href="{{route('doctor.destroy',$item->id)}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-center" colspan="4">No Record Found</td>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>
    
</body>
</html>