@extends('layouts.app')

@section('title', 'Create Folder')

@section('content')
    <h1>Create New Folder</h1>

    <form action="{{ route('folders.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="categories_id" class="form-label">Category</label>
            <select name="categories_id" id="categories_id" class="form-select" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create Folder</button>
        <a href="{{ route('folders.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
