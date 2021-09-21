<?php

namespace App\Http\Controllers;
use App\Location;

use Illuminate\Http\Request;

use App\Http\Requests;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Location::orderBy('id', 'DESC')->paginate(100);

        // $data = User::orderBy('id', 'DESC')->all();

        return view('admin.locations.index', compact('data'))
            ->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Location::orderBy('id', 'DESC')->paginate(100);
        return view('admin.locations.create', compact('data'))
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

         $data= new Location();
         $data->name=$request->name;
         $data->save();

        return redirect()->route('locations.index')
                        ->with('success', 'Location created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $location = Location::find($id);

        return view('admin.locations.show', compact('location'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $location = Location::find($id);
       
        return view('admin.locations.edit', compact('location'));
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
        $data = Location::find($id);
        $data->update($input);
        

        return redirect()->route('locations.index')
                        ->with('success', 'Location updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Location::find($id)->delete();

        return redirect()->route('locations.index')
                        ->with('success', 'Location deleted successfully');
    }
}
