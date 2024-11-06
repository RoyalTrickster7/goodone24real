<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Folder</title>
</head>
<body>

    <h1>Create Folder</h1>

    <form action="{{ route('folders.store') }}" method="post">
        @csrf
        
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>

        <button type="submit">Create Folder</button>
    </form>

</body>
</html>
