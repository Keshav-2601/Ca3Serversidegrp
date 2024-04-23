<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <!-- <th>Description</th> -->
            <!-- <th>Rating</th> -->
        </tr>
    </thead>
    <tbody>
        @foreach ($destinations as $destination)
            <tr>
                <td>{{ $destination->id }}</td>
                <td>{{ $destination->name }}</td>
                <!-- <td>{{ $destination->description }}</td> -->
                <!-- <td>{{ $destination->rating }}</td> -->
                @foreach ($destination->images as $image)
                      <td><img src="{{ asset($image->image_path) }}" alt="Image for {{ $destination->name }}"></td>
                @endforeach
                <td><a href="{{ route('hotelshowpage', ['destination_id' => $destination->id]) }}" class="btn btn-info">More Info</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
