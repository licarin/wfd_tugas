@extends('layouts.app')

@section('title', 'Event Detail') <!-- Set the title specific to this page -->

@section('content') <!-- Start the content section -->
<div class="container mt-5">
    <h1 class="mb-4">{{ $masterEvent->title }}</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Venue: {{ $masterEvent->venue }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Date: {{ \Carbon\Carbon::parse($masterEvent->date)->format('d M Y') }}</h6>
            <p class="card-text"><strong>Start Time:</strong> {{ $masterEvent->start_time }}</p>
            <p class="card-text"><strong>Description:</strong> {{ $masterEvent->description }}</p>
            <p class="card-text"><strong>Booking URL:</strong> <a href="{{ $masterEvent->booking_url }}">{{ $masterEvent->booking_url }}</a></p>
            <p class="card-text"><strong>Tags:</strong> {{ $masterEvent->tags }}</p>
            <p class="card-text"><strong>Organizer:</strong> {{ $masterEvent->organizer ? $masterEvent->organizer->name : 'Organizer not found' }}</p>
            <p class="card-text"><strong>Category:</strong> {{ $masterEvent->category ? $masterEvent->category->name : 'Category not found' }}</p>
            <p class="card-text"><strong>Status:</strong> {{ $masterEvent->active ? 'Active' : 'Inactive' }}</p>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('masterEvents.edit', $masterEvent) }}" class="btn btn-warning">Edit Event</a>
        <a href="{{ route('masterEvents.index') }}" class="btn btn-secondary">Back to Events</a>
    </div>
</div>
@endsection
