@extends('layouts.app')

@section('title', 'Edit Note')

@section('content')
    <h1>Edit Note</h1>

    <form action="{{ route('notes.update', $note->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" id="title" name="title" class="form-control" value="{{ $note->title }}" required>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea id="content" name="content" class="form-control" rows="4" required>{{ $note->content }}</textarea>
        </div>

        <button type="submit" class="btn btn-warning">Update Note</button>
        <a href="{{ route('notes.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
