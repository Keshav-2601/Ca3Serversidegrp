@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Destination and Hotel</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('destination.update', ['id' => $destination->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Destination Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $destination->name }}" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description">{{ $destination->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="image">Destination Image</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>

                            <!-- Hotel fields -->
                            <div class="form-group">
                                <label for="hotel_name">Hotel Name</label>
                                <input type="text" class="form-control" id="hotel_name" name="hotel_name" value="{{ $destination->hotels()->first()->name }}" required>
                            </div>

                            <div class="form-group">
                                <label for="stars">Stars</label>
                                <input type="number" class="form-control" id="stars" name="stars" value="{{ $destination->hotels()->first()->stars }}" required>
                            </div>

                            <div class="form-group">
                                <label for="hotel_image">Hotel Image</label>
                                <input type="file" class="form-control-file" id="hotel_image" name="hotel_image">
                            </div>

                            <button type="submit" class="btn btn-primary">Update Destination and Hotel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
