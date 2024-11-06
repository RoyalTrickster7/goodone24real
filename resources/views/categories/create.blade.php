<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Category</title>
</head>
<body>

    <h1>Create Category</h1>

    <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>

        <label for="color">Color:</label>
        <input type="color" id="color" name="color" required>
        <br><br>

        <label for="file">Image File (optional):</label>
        <input type="file" id="file" name="file">
        <br><br>

        <button type="submit">Create Category</button>
    </form>

</body>
</html>
