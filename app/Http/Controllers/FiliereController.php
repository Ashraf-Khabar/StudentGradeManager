<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filiere;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filieres=Filiere::all();
        return view('admin/filiere_manip/filiere_index',compact('filieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/filiere_manip/create_filiere');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filiere = new Filiere;
        $filiere->code = $request->code;
        $filiere->designation =$request->designation;
        $filiere->responsable =$request->responsable;
        $filiere->save();
            return redirect()->back()->with('status','filiere added successfully');
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
        $filiere = Filiere::findorfail($id);

        return view('admin.filiere_manip.edit_filiere' , compact('filiere'));
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
        $filiere = Filiere::findorfail($id);
        $filiere->code = $request->code;
        $filiere->designation =$request->designation;
        $filiere->responsable =$request->responsable;

        $filiere->update();
        return redirect()->back()->with('status','filiere updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $filiere = Filiere::findorfail($id);
        $filiere->delete();
        return redirect()->back()->with('status','filiere delted successfully');
    }
}
