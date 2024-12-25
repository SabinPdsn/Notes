@extends('layouts.app')

@section('content')
    <h1>Edit Note</h1>
    <form action="{{ route('notes.update', $note->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $note->title }}" required><br>
        
        <label for="content">Content:</label>
        <textarea name="content" id="content" required>{{ $note->content }}</textarea><br>

        <button type="submit">Update Note</button>
    </form>
@endsection
