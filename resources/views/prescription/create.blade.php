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
        <h2 class="text-center mt-3"><i>Create Prescription</i></h2>
        <form action="{{route('prescription.store')}}" method="post">
            @csrf
           <select name="appointment_id" class="form-control w-25 @error('appointment_id') is-invalid @enderror">
            <option value="disabled" selected disabled>Select appointment</option>
            @foreach ($create as $item)
                <option value="{{$item->id}}" {{ old('appointment_id') == $item->id ? 'selected' : '' }}
                    >{{ $item->appointmentdoctor->name }} - {{ $item->appointmentpatient->name }}</option>
            @endforeach
           </select>
           <span class="text-danger">@error('appointment_id') {{ $message }} @enderror</span>

           <div>
            <textarea name="medication_list" class="form-control w-25 mt-3 @error('medication_list') is-invalid @enderror" placeholder="Medication List">{{old('medication_list')}}</textarea>
            <span class="text-danger">@error('medication_list') {{ $message }} @enderror</span>
        </div>
            <div>
                <textarea name="note" class="form-control w-25 mt-3  @error('note') is-invalid @enderror" placeholder="Note">{{ old('note') }}</textarea>
                <span class="text-danger">@error('note') {{ $message }} @enderror</span>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Create</button>
        </form>
    </div>
    
</body>
</html>