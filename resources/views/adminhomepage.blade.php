@extends('layouts.app')

@section('content')
    <h1>Destinations</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Images</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($destinations as $destination)
                <tr>
                    <td>{{ $destination->name }}</td>
                    <td>{{$destination->description}}</td>
                    <td>
                        @foreach ($destination->images as $image)
                            <img src="{{ $image->image_path}}" alt="Image for {{ $destination->name }}">
                        @endforeach
                    </td>
                    <td><button>Edit</button></td>
                    <td><button>Delete</button></td>
                </tr>
            @endforeach
        </tbody>
        
    </table>
@endsection