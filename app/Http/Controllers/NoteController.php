<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    // Display all notes
    public function index()
    {
        // Fetch all notes from the database
        $notes = Note::all();

        // Return the 'index' view with the notes data
        return view('notes.index', compact('notes'));
    }

    // Show the form to create a new note
    public function create()
    {
        return view('notes.create');
    }

    // Store a newly created note
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Create a new note in the database
        Note::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // Redirect to the index route (show all notes)
        return redirect()->route('notes.index');
    }

    // Show the form to edit an existing note
    public function edit(Note $note)
    {
        // Return the 'edit' view with the note data
        return view('notes.edit', compact('note'));
    }

    // Update an existing note
    public function update(Request $request, Note $note)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Update the note in the database
        $note->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // Redirect to the index route (show all notes)
        return redirect()->route('notes.index');
    }

    // Delete a note
    public function destroy(Note $note)
    {
        // Delete the note from the database
        $note->delete();

        // Redirect to the index route (show all notes)
        return redirect()->route('notes.index');
    }
}
