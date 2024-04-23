@extends('layouts.app')

@section('content')
    <h1>Hotels</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Stars</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hotels as $hotel)
                <tr>
                    <td>{{ $hotel->name }}</td>
                    <td>{{ $hotel->stars }}</td>
                    <td><img src="{{ $hotel->image_url }}" alt="Image for {{ $hotel->name }}"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
