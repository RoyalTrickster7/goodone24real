@extends('layouts.app')

@section('title', 'View Folder')

@section('content')
    <h1>Folder Details</h1>

    <div class="mb-3">
        <p><strong>ID:</strong> {{ $folder->id }}</p>
        <p><strong>Name:</strong> {{ $folder->name }}</p>
    </div>

    <a href="{{ route('folders.edit', $folder->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('folders.destroy', $folder->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('folders.index') }}" class="btn btn-secondary">Back</a>
@endsection
