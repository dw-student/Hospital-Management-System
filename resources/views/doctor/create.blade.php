<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor create</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-4"><i>Hospital Management System (HMS)</i></h1>
        <h2 class="text-center mt-3"><i>Create a Doctor!</i></h2>
        <form action="{{route('doctor.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <input type="text" name="name" value="{{old('name')}}" class="form-control w-25 mt-3 @error('name') is-invalid @enderror" placeholder="Doctor Name">
                <span class="text-danger">@error('name') {{$message}}  @enderror</span>
            </div>
            <div>
                <input type="text" name="speciality" value="{{old('speciality')}}" class="form-control w-25 mt-3 @error('speciality') is-invalid @enderror" placeholder="Doctor Speciality">
                <span class="text-danger">@error('speciality') {{$message}}  @enderror</span>
            </div>
            <div>
                <input type="file" name="file" value="{{old('file')}}" class="form-control w-25 mt-3 @error('file') is-invalid @enderror" placeholder="Doctor Image">
            </div>
            <button type="submit" class="btn btn-success mt-3">Create</button>
        </form>
    </div>
</body>
</html>