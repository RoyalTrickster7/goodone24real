<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Notes</title>
</head>
<body>
    
    <h1>All Notes</h1>

    <a href="{{ route('notes.create') }}">Create new note</a>

    <table>
        <thead>
            <tr>
               <th>ID</th> 
               <th>Title</th> 
               <th>Content</th>
               <th>Actions</th>
               <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($notes as $note)
                <tr>
                    <td>{{ $note->id }}</td>
                    <td>{{ $note->title }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($note->content, 50) }}</td> <!-- Limita la vista del contenido a 50 caracteres -->
                    <td>
                        <a href="{{ route('notes.show', $note->id) }}">See note</a>
                        <a href="{{ route('notes.edit', $note->id) }}">Edit note</a>
                    </td>
                    <td>
                        <form action="{{ route('notes.destroy', $note->id) }}" method="post">
                            @csrf
                            @method('delete')

                            <input type="submit" value="Delete note">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
