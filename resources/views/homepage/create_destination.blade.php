@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Destination</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('homepage.storeDestination') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="image">Destination Image</label>
                                <input type="file" class="form-control-file" id="image" name="image" required>
                            </div>

                            <hr>

                            <div id="hotels-container">
                                <div class="hotel-group">
                                    <div class="form-group">
                                        <label for="hotel_name">Hotel Name</label>
                                        <input type="text" class="form-control" name="hotels[0][hotel_name]" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="stars">Stars</label>
                                        <input type="number" class="form-control" name="hotels[0][stars]" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="hotel_image">Hotel Image</label>
                                        <input type="file" class="form-control-file" name="hotels[0][hotel_image]" required>
                                    </div>
                                </div>
                            </div>
                          
                            <button type="submit" class="btn btn-primary">Create Destination and Hotels</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
