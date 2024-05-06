@extends('layouts.app')

@section('content')
    <div class="destination-details">
        <h1>{{ $destination->name }}</h1>
        <p>{{ $destination->description }}</p>
       
        @if ($destination->images)
         
            @if ($destination->images->isNotEmpty())
                <div class="destination-images">
                    @foreach ($destination->images as $image)
                        <img src="{{ asset($image->image_path) }}" alt="Image for {{ $destination->name }}">
                    @endforeach
                </div>
            @else
                <p>No images available</p>
            @endif
        @else
            <p>No images available</p>
        @endif

        <h2>Hotels nearby:</h2>
        @if ($hotels->isNotEmpty())
            <ul class="hotel-list">
                @foreach ($hotels as $hotel)
                    <li class="hotel-card">
                        <h3>{{ $hotel->name }}</h3>
                        <p>Stars: {{ $hotel->stars }}</p>
                        <img src="{{ asset($hotel->image_url) }}" alt="Image for {{ $hotel->name }}">
                    </li>
                @endforeach
                <a href="{{ route('addhotelbyadminonly') }}" class="btn btn-primary">Add Hotel</a>
            </ul>
        @else
            <p>No hotels nearby</p>
        @endif
    </div>
@endsection
