<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Users</title>
</head>
<body>
    
    <h1>All Users</h1>

    <a href="{{ route('users.create') }}">Create new user</a>

    <table>
        <thead>
            <tr>
               <th>ID</th> 
               <th>Name</th> 
               <th>Email</th>
               <th>Actions</th>
               <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}">See user</a>
                        <a href="{{ route('users.edit', $user->id) }}">Edit user</a>
                    </td>
                    <td>
                        <form action="{{ route('users.destroy', $user->id) }}" method="post">
                            @csrf
                            @method('delete')

                            <input type="submit" value="Delete user">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
