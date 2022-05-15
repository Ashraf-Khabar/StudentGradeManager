<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Responsable_filiere;

class Responsable_filiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resp=Responsable_filiere::all();
        return view('admin/resp_manip/resp_index',compact('resp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/resp_manip/create_resp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resp = new Responsable_filiere;
        $resp->nom =$request->nom;
        $resp->prenom =$request->prenom;
        $resp->departement =$request->departement;
        $resp->login =$request->login;
        $resp->save();
        return redirect()->back()->with('status','responsable added successfully');
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
        $resp = Responsable_filiere::findorfail($id);
        
        return view('admin\resp_manip\edit_resp' , compact('resp'));
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
        $resp = Responsable_filiere::findorfail($id); 
        $resp->nom =$request->nom;
        $resp->prenom =$request->prenom;
        $resp->departement =$request->departement;
        $resp->login =$request->login;
        $resp->update();
        return redirect()->back()->with('status','responsable updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resp = Responsable_filiere::findorfail($id);
        $resp->delete();
        return redirect()->back()->with('status','responsable delted successfully');
    }
}
