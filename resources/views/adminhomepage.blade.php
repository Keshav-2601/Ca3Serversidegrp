@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand mx-auto" href="#" style="font-size: 30px;">Dublin Tourist Attractions</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Explore More</a>
                </li>
            </ul>
           
        </div>
    </nav>
    

    <div class="container">
        <h1>Destinations</h1>

        <a href="{{ route('homepage.createDestination') }}">Add Destination</a>
            @auth
    @if(Auth::user()->email === 'ashik@gmail.com' || Auth::user()->email === 'keshavv857@gmail.com')
        <form class="form-inline my-2 my-lg-0" action="{{ route('search') }}" method="GET" id="searchForm">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="query">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    @endif
@endauth


        <div class="destination-list">
    @foreach ($destinations as $destination)
        <div class="destination-item">
            @if ($destination->images->isNotEmpty())
                <!-- Check if there are images associated with the destination -->
                <img src="{{ asset($destination->images->first()->image_path) }}" alt="Image for {{ $destination->name }}">
            @else
                <p>No images available</p>
            @endif
            <div class="destination-info">
                <h2>{{ $destination->name }}</h2>
                <p>{{ $destination->description }}</p>
                <div class="destination-actions">
                    <a href="{{ route('homepage.showDestination', ['id' => $destination->id]) }}">View</a>
                    <a href="{{ route('homepage.editDestination', ['id' => $destination->id]) }}">Edit</a>
                    <form action="{{ route('destroydestination',$destination->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach


        </div>
    </div>
<script>
    window.addEventListener('DOMContentLoaded', (event) => {
        const urlParams = new URLSearchParams(window.location.search);
        const query = urlParams.get('query');
        if (query) {
            document.getElementById('searchForm').querySelector('input[name="query"]').value = query;
        }
    });
</script>
    
@endsection
