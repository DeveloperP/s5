<?php

namespace App\Http\Controllers;

use App\Models\PslPrincipal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;

class PslPrincipalController extends Controller
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
        $principals = PslPrincipal::all();
        return view('pslprincipal.index',['principals'=>$principals]);
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
            'principal_name' => 'required',
        ]);
        PslPrincipal::create($request->all());
        return Redirect::route('principals.index')->with('message','You have successfully submitted');
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
    public function edit(PslPrincipal $principal)
    {
        $principals = PslPrincipal::all();
        return view('pslprincipal.edit',['principals'=>$principals,'principal'=>$principal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PslPrincipal $principal)
    {
        $this->validate($request, [
            'principal_name' => 'required',
        ]);
        $input = array_except($request->all(), '_method');
        $principal->update($input);
        return Redirect::route('principals.edit',$principal->id)->with('message','You have successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PslPrincipal $principal)
    {
        $principal->delete();
        return Redirect::route('principals.index')->with('message','You have successfully deleted');
    }
}
