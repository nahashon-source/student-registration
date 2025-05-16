<!DOCTYPE html>
<html>
<head>
    <title>Add New Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">

    <h1>Add New Student</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
        </div>
        <div class="mb-3">
            <label>Course:</label>
            <input type="text" name="course" class="form-control" value="{{ old('course') }}">
        </div>
        <div class="mb-3">
            <label>Registration Number:</label>
            <input type="text" name="registration_number" class="form-control" value="{{ old('registration_number') }}">
        </div>
        <button type="submit" class="btn btn-primary">Add Student</button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
    </form>

</body>
</html>
