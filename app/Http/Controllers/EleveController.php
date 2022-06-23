<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eleve;
use Illuminate\Support\Facades\DB;
use Auth;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Eleve::all();
        return view('admin/eleve_manip/eleve_index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/eleve_manip/create_eleve');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $eleve = new Eleve;
        $eleve->code = $request->code;
        $eleve->nom =$request->nom;
        $eleve->prenom =$request->prenom;
        $eleve->niveau =$request->niveau;
        $eleve->code_fil =$request->code_fil;
        $eleve->login =$request->login;
        $eleve->save();
            return redirect()->back()->with('status','eleve added successfully');
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
        $eleve = Eleve::findorfail($id);
        return view('admin.eleve_manip.edit_eleve' , compact('eleve'));
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
        $eleve = Eleve::findorfail($id);
        $eleve->code = $request->code;
        $eleve->nom =$request->nom;
        $eleve->niveau =$request->niveau;
        $eleve->code_fil =$request->code_fil;
        $eleve->login =$request->login;
        $eleve->update();
        return redirect()->back()->with('status','eleve updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eleve = Eleve::findorfail($id);
        $eleve->delete();
        return redirect()->back()->with('status','eleve delted successfully');

    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */
    
    public function send_stu()
    {
        //$notes=Notes::all();

        $user = Auth::user();
        $students = DB::table('users')
            ->join('filieres', 'users.login', '=', 'filieres.responsable')
            ->join('eleves','eleves.code_fil','=','filieres.code')
            ->select('eleves.*')
            ->where('users.id','=',$user->id)
            ->get();
        return view('\resp_dashboard',compact('students'));
    }
}
