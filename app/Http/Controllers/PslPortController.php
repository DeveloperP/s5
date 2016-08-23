<?php

namespace App\Http\Controllers;

use App\Models\PslPort;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;

class PslPortController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ports = PslPort::all();
        return view('pslport.index',['ports'=>$ports]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'port_name' => 'required',
        ]);
        PslPort::create($request->all());
        return Redirect::route('ports.index')->with('message','You have successfully submitted');
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
    public function edit(PslPort $port)
    {
        $ports = PslPort::all();
        return view('pslport.edit',['ports'=>$ports,'port'=>$port]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PslPort $port)
    {
        $this->validate($request, [
            'port_name' => 'required',
        ]);
        $input = array_except($request->all(), '_method');
        $port->update($input);
        return Redirect::route('ports.edit',$port->id)->with('message','You have successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PslPort $port)
    {
        $port->delete();
        return Redirect::route('ports.index')->with('message','You have successfully deleted');
    }
}
