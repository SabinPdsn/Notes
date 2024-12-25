@extends('layouts.app')

@section('content')
    <h1>Notes</h1>
    <a href="{{ route('notes.create') }}">Add New Note</a>
    <ul>
        @foreach ($notes as $note)
            <li>
                <h3>{{ $note->title }}</h3>
                <p>{{ $note->content }}</p>
                <a href="{{ route('notes.edit', $note->id) }}">Edit</a>
                <form action="{{ route('notes.destroy', $note->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
