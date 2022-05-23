<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notes;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes=Notes::all();
        return view('responsable.note_manip.note_index',compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('responsable.note_manip.create_note');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $note = new Notes;
        $note->code_eleve = $request->code_eleve;
        $note->code_elm_mod =$request->code_elm_mod;
        $note->note =$request->note;
        $note->save();
            return redirect()->back()->with('status','note added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $note = Notes::findorfail($id);

        return view('responsable.note_manip.edit_note' , compact('note'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $note = Notes::findorfail($id);
        $note->code_eleve = $request->code_eleve;
        $note->code_elm_mod =$request->code_elm_mod;
        $note->note =$request->note;

        $note->update();
        return redirect()->back()->with('status','note updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $note = Notes::findorfail($id);
        $note->delete();
        return redirect()->back()->with('status','note delted successfully');
    }
}
