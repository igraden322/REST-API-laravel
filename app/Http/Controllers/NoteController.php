<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Http\Requests\NoteRequest;
use App\Http\Resources\NoteResource;
use Illuminate\Http\Request;


class NoteController extends Controller
{
    public function index()
    {
        return Note::paginate();
    }

    public function store(Request $request)
    {
        // $note = new Note();

        // $note->fullName = $request->fullName;
        // $note->company = $request->company;
        // $note->phone = $request->phone;
        // $note->mail = $request->mail;
        // $note->birthDate = $request->birthDate;
        // $note->photo = $request->photo;

        // $note->save();
        $created_note = Note::create($request->all());
        return response()->json($created_note);
    }

    public function show(Note $note)
    {
        return $note = Note::findOrFail($note->id);
    }

    public function update(NoteRequest $request, Note $note)
    {
        $note = Note::findOrFail($note->id);

        $note->fill($request->except($note->id));

        $note->save();
        return $note;
    }

    public function destroy(Request $request, $id)
    {
        $note = Note::findOrFail($id);
        if($note->delete())
            return response(null, 204);
    }

    public function view(){
        return view('main',[
            'notes' => Note::all()
        ]);
    }
}
