<?php

namespace App\Http\Controllers;

use App\Models\PslJetty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;

class PslJettyController extends Controller
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
        $jetties = PslJetty::all();
        return view('psljetty.index',['jetties'=>$jetties]);
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
            'jetty_name' => 'required',
        ]);
        PslJetty::create($request->all());
        return Redirect::route('jetties.index')->with('message','You have successfully submitted');
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
    public function edit(PslJetty $jetty)
    {
        $jetties = Psljetty::all();
        return view('psljetty.edit',['jetties'=>$jetties,'jetty'=>$jetty]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PslJetty $jetty)
    {
        $this->validate($request, [
            'jetty_name' => 'required',
        ]);
        $input = array_except($request->all(), '_method');
        $jetty->update($input);
        return Redirect::route('jetties.edit',$jetty->id)->with('message','You have successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PslJetty $jetty)
    {
        $jetty->delete();
        return Redirect::route('jetties.index')->with('message','You have successfully deleted');
    }
}
