@extends('layouts.app')

@section('title', 'View Note')

@section('content')
    <h1>Note Details</h1>

    <div class="mb-3">
        <p><strong>ID:</strong> {{ $note->id }}</p>
        <p><strong>Title:</strong> {{ $note->title }}</p>
        <p><strong>Content:</strong></p>
        <p>{{ $note->content }}</p>
    </div>

    <a href="{{ route('notes.edit', $note->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('notes.destroy', $note->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('notes.index') }}" class="btn btn-secondary">Back</a>
@endsection
