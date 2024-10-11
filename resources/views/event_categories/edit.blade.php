@extends('layouts.app')

@section('title', 'Events') <!-- Set the title specific to this page -->

@section('content') <!-- Start the content section -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Categories</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Edit Categories: {{ $event_categories->name }}</h1>

        <!-- Error handling -->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('event_categories.update', $event_categories->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" value="{{ $event_categories->name }}" required>
    </div>


    <div class="form-group">
                <label for="active">Active:</label>
                <input type="hidden" name="active" value="0">
                <input type="checkbox" name="active" value="1" checked>            </div>

    <button type="submit" class="btn btn-primary">Update Categories</button>
    <a href="{{ route('event_categories.store', $event_categories->id) }}" class="btn btn-secondary">Cancel</a>
</form>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
</body>
@endsection
</html>
