<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appointment create</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-4"><i>Hospital Management System (HMS)</i></h1>
        <h2 class="text-center mt-3"><i>Create Appointment</i></h2>
        <form action="{{route('appointment.store')}}" method="post">
            @csrf
                <select name="doctor_id" value="{{old('doctor_id')}}" class="form-control w-25 @error('doctor_id') is-invalid @enderror">
                    <option value="" selected disabled>Select a Doctor</option>
                    @foreach ($doctor as $item)
                        <option value="{{$item->id}}" {{ old('doctor_id') == $item->id ? 'selected' : '' }}
                            >{{ $item->name }}</option>
                    @endforeach
                   </select>
                   <span class="text-danger">@error('doctor_id') {{$message}} @enderror</span>

                   <select name="patient_id" class="form-control w-25 mt-3">
                    <option value="disabled" selected disabled>Select a Patient</option>
                    @foreach ($patient as $item)
                        <option value="{{$item->id}}" {{ old('patient_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                    @endforeach
                   </select>
                   <span class="text-danger">@error('patient_id') {{$message}} @enderror</span>
            <div>
                <input type="date" name="date" class="form-control w-25 mt-3 @error('date') is-invalid @enderror" placeholder="Date">
                <span class="text-danger">@error('date') {{$message}} @enderror</span>
            </div>
            <button type="submit" class="btn btn-success mt-3">Create</button>
        </form>
    </div>
    
</body>
</html>