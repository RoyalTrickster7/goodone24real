@extends('layouts.app')

@section('title', 'Notes')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Notes</h1>
        <a href="{{ route('notes.create') }}" class="btn btn-primary">Create New Note</a>
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
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notes as $note)
                <tr>
                    <td>{{ $note->id }}</td>
                    <td>{{ $note->title }}</td>
                    <td>
                        <a href="{{ route('notes.show', $note->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('notes.edit', $note->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('notes.destroy', $note->id) }}" method="POST" style="display: inline;">
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
