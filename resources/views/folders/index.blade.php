@extends('layouts.app')

@section('title', 'Folders')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Folders</h1>
        <a href="{{ route('folders.create') }}" class="btn btn-primary">Create New Folder</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
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
                        <a href="{{ route('folders.show', $folder->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('folders.edit', $folder->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('folders.destroy', $folder->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
