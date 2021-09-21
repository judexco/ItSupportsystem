<?php

namespace App\Http\Controllers;

use App\Businessu;
use Illuminate\Http\Request;

use App\Http\Requests;

class BusinessunitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Businessu::orderBy('id', 'DESC')->paginate(100);

        // $data = User::orderBy('id', 'DESC')->all();

        return view('admin.businessunits.index', compact('data'))
            ->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Businessu::orderBy('id', 'DESC')->paginate(100);
        return view('admin.businessunits.create', compact('data'))
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

         $data= new Businessu();
         $data->name=$request->name;
         $data->save();

        return redirect()->route('businessunits.index')
                        ->with('success', 'Business unit created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $businessunit = Businessu::find($id);

        return view('admin.businessunits.show', compact('businessunit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $businessunit = Businessu::find($id);

        return view('admin.businessunits.edit', compact('businessunit'));
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
        $data = Businessu::find($id);
        $data->update($input);
        

        return redirect()->route('businessunits.index')
                        ->with('success', 'Business unit updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Businessu::find($id)->delete();

        return redirect()->route('businessunits.index')
                        ->with('success', 'Business unit deleted successfully');
    }
}
