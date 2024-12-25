<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

// Redirect root URL to the notes index page
Route::get('/', function () {
    return redirect()->route('notes.index');
});

// Resource route for notes CRUD operations
Route::resource('notes', NoteController::class);
