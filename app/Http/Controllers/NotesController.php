<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notes;
use Illuminate\Support\Facades\DB;
use Auth;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */

    public function index()
    {
        //$notes=Notes::all();

        $user = Auth::user();
        $notes = DB::table('users')
            ->join('filieres', 'users.login', '=', 'filieres.responsable')
            ->join('eleves','eleves.code_fil','=','filieres.code')
            ->join('notes','notes.code_eleve','=','eleves.code')
            ->join('element__modules','element__modules.code','=','notes.code_elm_mod')
            ->join('modules','modules.code','=','element__modules.code_mod')
            ->select('notes.*','modules.semestre','modules.code','element__modules.poids')
            ->where('users.id','=',$user->id)
            ->get();
        return view('responsable\note_manip\note_index',compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('responsable\note_manip\create_note');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $user = Auth::user();
        $test=db::table('users')
                    ->join('filieres','filieres.responsable','=','users.login')
                    ->join('eleves','eleves.code_fil','=','filieres.code')
                    ->select('users.id')
                    ->where('users.id','=',$user->id)
                    ->where('eleves.code','=',$request->code_eleve)
                    ->get();
        if(count($test)==0)return redirect()->back()->with('status','note not added , you cant add note for student aho doesnt belong to your group');
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
        $user=Auth::user();
        $notes=db::table('notes')
                    ->join('element__modules','element__modules.code','=','notes.code_elm_mod')
                    
                    ->join('eleves','eleves.code','=','notes.code_eleve')
                    ->join('filieres','eleves.code_fil','=','filieres.code')
                    ->join('users', 'users.login', '=', 'filieres.responsable') 
                    ->select('notes.*','element__modules.code_mod')
                    ->where('notes.code_eleve','=',$id)
                    ->where('users.id','=',$user->id)
                    ->get();
        if(count($notes)==0)return  redirect('/resp_dashboard')->with('status','eleve note found or doesnt have notes');
        return view('responsable\consult\notes',compact('notes'));
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
        
        return view('responsable\note_manip\edit_note' , compact('note'));
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_moy($id)
    {
        $user=Auth::user();
        $moyennes=db::table('moyennes')
                    
                    ->join('eleves','eleves.code','=','moyennes.code_eleve')
                    ->join('filieres','eleves.code_fil','=','filieres.code')
                    ->join('users', 'users.login', '=', 'filieres.responsable') 
                    ->select('moyennes.*')
                    ->where('moyennes.code_eleve','=',$id)
                    ->where('users.id','=',$user->id)
                    ->get();
        if(count($moyennes)==0)return  redirect('/resp_dashboard')->with('status','eleve note found or doesnt have moyennes');
        return view('responsable\consult\moyennes',compact('moyennes'));
    } 
}
