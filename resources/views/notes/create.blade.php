@extends('layouts.app')

@section('content')
    <h1>Create New Note</h1>
    <form action="{{ route('notes.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required><br>
        
        <label for="content">Content:</label>
        <textarea name="content" id="content" required></textarea><br>

        <button type="submit">Save Note</button>
    </form>
@endsection
