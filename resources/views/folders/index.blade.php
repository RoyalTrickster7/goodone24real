<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Folders</title>
</head>
<body>

    <h1>Folders</h1>

    <a href="{{ route('folders.create') }}" class="btn btn-primary">Create New Folder</a>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($folders as $folder)
                <tr>
                    <td>{{ $folder->id }}</td>
                    <td>{{ $folder->name }}</td>
                    <td>
                        <a href="{{ route('folders.show', $folder->id) }}">View</a>
                        <a href="{{ route('folders.edit', $folder->id) }}">Edit</a>
                        <form action="{{ route('folders.destroy', $folder->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
