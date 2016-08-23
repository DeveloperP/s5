<?php

namespace App\Http\Controllers;

use App\Models\PslBranch;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class PslBranchController extends Controller
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
        $branches = PslBranch::all();
        return view('pslbranch.index',['branches'=>$branches]);
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
            'branch_name' => 'required',
        ]);
        PslBranch::create($request->all());
        return Redirect::route('branches.index')->with('message','You have successfully submitted');
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
    public function edit(PslBranch $branch)
    {
        $branches = PslBranch::all();
        return view('pslbranch.edit',['branches'=>$branches,'branch'=>$branch]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PslBranch $branch)
    {
        $this->validate($request, [
            'branch_name' => 'required',
        ]);
        $input = array_except($request->all(), '_method');
        $branch->update($input);
        return Redirect::route('branches.edit',$branch->id)->with('message','You have successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PslBranch $branch)
    {
        $branch->delete();
        return Redirect::route('branches.index')->with('message','You have successfully deleted');
    }
}
