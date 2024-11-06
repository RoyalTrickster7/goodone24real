@extends('layouts.app')

@section('title', 'View Category')

@section('content')
    <h1>Category Details</h1>

    <div class="mb-3">
        <p><strong>ID:</strong> {{ $category->id }}</p>
        <p><strong>Name:</strong> {{ $category->name }}</p>
        <p><strong>Color:</strong> <span style="background-color: #{{ $category->color }};">&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
    </div>

    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back</a>
@endsection
