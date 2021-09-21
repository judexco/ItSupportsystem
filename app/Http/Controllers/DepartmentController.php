<?php

namespace App\Http\Controllers;

use App\Dept;
use Illuminate\Http\Request;

use App\Http\Requests;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Dept::orderBy('id', 'DESC')->paginate(100);

        // $data = User::orderBy('id', 'DESC')->all();

        return view('admin.departments.index', compact('data'))
            ->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Dept::orderBy('id', 'DESC')->paginate(100);
        return view('admin.departments.create', compact('data'))
            ->with('i');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            
        ]);

         $data= new Dept();
         $data->name=$request->name;
         $data->save();

        return redirect()->route('departments.index')
                        ->with('success', 'Department created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dept = Dept::find($id);

        return view('admin.departments.show', compact('dept'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dept = Dept::find($id);

        return view('admin.departments.edit', compact('dept'));
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
        $this->validate($request, [
            'name' => 'required',
            
        ]);


        $input = $request->all();
        $data = Dept::find($id);
        $data->update($input);
        

        return redirect()->route('departments.index')
                        ->with('success', 'Department updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dept::find($id)->delete();

        return redirect()->route('departments.index')
                        ->with('success', 'Department deleted successfully');
    }
}
