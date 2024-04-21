<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Rating</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($destinations as $destination)
            <tr>
                <td>{{ $destination->id }}</td>
                <td>{{ $destination->name }}</td>
                <td>{{ $destination->description }}</td>
                <td>{{ $destination->rating }}</td>
            </tr>
        @endforeach
    </tbody>
</table>