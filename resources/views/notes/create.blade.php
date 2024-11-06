<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Note</title>
</head>
<body>

    <h1>Create Note</h1>

    <form action="{{ route('notes.store') }}" method="post">
        @csrf
        
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        <br><br>

        <label for="content">Content:</label>
        <textarea id="content" name="content" rows="4" required></textarea>
        <br><br>

        <button type="submit">Create Note</button>
    </form>

</body>
</html>
