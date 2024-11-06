<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Folder</title>
</head>
<body>

    <h1>Folder Details</h1>

    <p><strong>ID:</strong> {{ $folder->id }}</p>
    <p><strong>Name:</strong> {{ $folder->name }}</p>

    <a href="{{ route('folders.edit', $folder->id) }}">Edit Folder</a>
    <br><br>

    <form action="{{ route('folders.destroy', $folder->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Folder</button>
    </form>

    <br><br>
    <a href="{{ route('folders.index') }}">Back to Folders</a>

</body>
</html>
