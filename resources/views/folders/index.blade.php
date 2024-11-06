<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Folders</title>
</head>
<body>
    
    <h1>All Folders</h1>

    <a href="{{ route('folders.create') }}">Create new folder</a>

    <table>
        <thead>
            <tr>
               <th>ID</th> 
               <th>Name</th> 
               <th>Actions</th>
               <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($folders as $folder)
                <tr>
                    <td>{{ $folder->id }}</td>
                    <td>{{ $folder->name }}</td>
                    <td>
                        <a href="{{ route('folders.show', $folder->id) }}">See folder</a>
                        <a href="{{ route('folders.edit', $folder->id) }}">Edit folder</a>
                    </td>
                    <td>
                        <form action="{{ route('folders.destroy', $folder->id) }}" method="post">
                            @csrf
                            @method('delete')

                            <input type="submit" value="Delete folder">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
