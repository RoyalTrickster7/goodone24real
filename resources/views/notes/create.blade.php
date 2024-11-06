@extends('layouts.app')

@section('title', 'Create Note')

@section('content')
    <h1>Create New Note</h1>

    <form action="{{ route('notes.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea id="content" name="content" class="form-control" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create Note</button>
        <a href="{{ route('notes.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
