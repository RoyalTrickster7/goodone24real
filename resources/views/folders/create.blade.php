<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Folder</title>
</head>
<body>

    <h1>Create New Folder</h1>

    <form action="{{ route('folders.store') }}" method="POST">
        @csrf
        
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>

        <label for="categories_id">Category:</label>
        <select name="categories_id" id="categories_id" required>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <br><br>

        <button type="submit">Create Folder</button>
    </form>

    <a href="{{ route('folders.index') }}">Back to Folders</a>

</body>
</html>
