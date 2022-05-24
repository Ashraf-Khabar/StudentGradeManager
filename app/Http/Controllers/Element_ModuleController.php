<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Element_Module;

class Element_ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elements=Element_Module::all();
        return view('responsable.elem_manip.element_module_index',compact('elements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('responsable.elem_manip.create_element_module');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $element = new Element_Module;
        $element->code = $request->code;
        $element->designation =$request->designation;
        $element->vh =$request->vh;
        $element->poids =$request->poids;
        $element->code_mod =$request->code_mod;
        $element->save();
            return redirect()->back()->with('status','element added successfully');
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
        $element = Element_Module::findorfail($id);

        return view('responsable.elem_manip.edit_element_module' , compact('element'));
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
        $element = Element_Module::findorfail($id);
        $element->code = $request->code;
        $element->designation =$request->designation;
        $element->vh =$request->vh;
        $element->poids =$request->poids;
        $element->code_mod =$request->code_mod;
        $element->update();
        return redirect()->back()->with('status','element updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $element = Element_Module::findorfail($id);
        $element->delete();
        return redirect()->back()->with('status','element delted successfully');
    }
}
