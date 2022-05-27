<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules=Module::all();
        return view('responsable.module_manip.module_index',compact('modules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('responsable.module_manip.create_module');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $module = new Module;
        $module->code = $request->code;
        $module->designation =$request->designation;
        $module->niveau =$request->niveau;
        $module->semestre =$request->semestre;
        $module->code_fil =$request->code_fil;
        $module->save();
            return redirect()->back()->with('status','module added successfully');
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
        $module = Module::findorfail($id);

        return view('responsable.module_manip.edit_module' , compact('module'));
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
        $module = Module::findorfail($id);
        $module->code = $request->code;
        $module->designation =$request->designation;
        $module->niveau =$request->niveau;
        $module->semestre =$request->semestre;
        $module->code_fil =$request->code_fil;
        $module->update();
        return redirect()->back()->with('status','module updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $module = Module::findorfail($id);
        $module->delete();
        return redirect()->back()->with('status','module delted successfully');
    }
}
