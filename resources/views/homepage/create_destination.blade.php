<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        
        <!-- Scripts -->
        @vite(['resources/css/createdestinationpage.css', 'resources/js/app.js'])
    </head>

<body>
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
                                <label for="rating">Rating</label>
                                <input  type='text' class="form-control" id="rating" name="rating"></input>
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
                           <button type="button" class="btn btn-success" id="add-hotel">Add Hotel</button>
                            <button type="submit" class="btn btn-primary">Create Destination and Hotels</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <script>
        document.getElementById('add-hotel').addEventListener('click', function() {
            var index = document.querySelectorAll('.hotel-group').length;
            var html = `
                <div class="hotel-group">
                    <div class="form-group">
                        <label for="hotel_name">Hotel Name</label>
                        <input type="text" class="form-control" name="hotels[${index}][hotel_name]" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="stars">Stars</label>
                        <input type="number" class="form-control" name="hotels[${index}][stars]" required>
                    </div>

                    <div class="form-group">
                        <label for="hotel_image">Hotel Image</label>
                        <input type="file" class="form-control-file" name="hotels[${index}][hotel_image]" required>
                    </div>
                </div>
            `;
            document.getElementById('hotels-container').insertAdjacentHTML('beforeend', html);
        });
    </script>

    </body>