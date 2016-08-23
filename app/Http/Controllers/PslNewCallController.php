<?php

namespace App\Http\Controllers;

use App\Models\PslCall;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class PslNewCallController extends Controller
{
    /*
     * using Authdendication middleware
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the new calls.
     */
    public function index()
    {
        $calls = PslCall::all();
        return view('pslcall.home',compact('calls'));
    }

    /**
     * Show the form for creating a new call.
     */
    public function create()
    {
        $branch = array('' => '') + DB::table('psl_branches')->lists('branch_name','id');
        $port = array('' => '') + DB::table('psl_ports')->lists('port_name','id');
        $jetty = array('' => '') + DB::table('psl_jetties')->lists('jetty_name','id');
        $principal = array('' => '') + DB::table('psl_principals')->lists('principal_name','id');
        $user = array('' => '') + DB::table('users')->lists('name','id');
        $now = Carbon::now();
        $purposes = DB::table('psl_purposes')->lists('name','id');
        return view('pslcall.create',compact('branch','port','jetty','principal','user','now','purposes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'vessel_name' => 'required',
            'branch_id' => 'required',
            'port_id' => 'required',
            'jetty_id' => 'required',
            'principal_id' => 'required',
            'voyage_no' => 'required',
            'employee_id' => 'required',
        ]);

        $input['branch_id'] = $request->branch_id;
        $input['vessel_name'] = $request->vessel_name;
        $input['port_id'] = $request->port_id;
        $input['jetty_id'] = $request->jetty_id;
        $input['voyage_no'] = $request->voyage_no;
        $input['principal_id'] = $request->principal_id;
        $input['reference_no'] = $request->voyage_no;
        $input['eta_estimate_time'] = $request->eta_estimate_time;
        $input['etb_estimate_time'] = $request->etb_estimate_time;
        $input['etc_estimate_time'] = $request->etc_estimate_time;
        $input['etd_estimate_time'] = $request->etd_estimate_time;
        $input['ata_actual_time'] = $request->ata_actual_time;
        $input['atb_actual_time'] = $request->atb_actual_time;
        $input['atc_actual_time'] = $request->atc_actual_time;
        $input['atd_actual_time'] = $request->atd_actual_time;
        $input['previous_port_id'] = $request->previous_port_id;
        $input['next_port_id'] = $request->next_port_id;
        $input['employee_id'] = $request->employee_id;
        $input['quality_rating'] = $request->quality_rating;
        $input['cancel_call'] = $request->cancel_call;
        $input['cancel_remark'] = $request->cancel_remark;
        $input['no_cost_time'] = $request->no_cost_time;
        $input['no_cost_time_remark'] = $request->no_cost_time_remark;
        dd($input);
        $call = Auth::user()->calls()->create($input);
        $call->purposes()->attach($request->input('purposes'));
        return Redirect::route('calls.show',$call->id);
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(PslCall $call)
    {
        //dd($call);
        return view('pslcall.show',compact('call'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PslCall $call)
    {
       // dd($call);
        $branch = array('' => '') + DB::table('psl_branches')->lists('branch_name','id');
        $port = array('' => '') + DB::table('psl_ports')->lists('port_name','id');
        $jetty = array('' => '') + DB::table('psl_jetties')->lists('jetty_name','id');
        $principal = array('' => '') + DB::table('psl_principals')->lists('principal_name','id');
        $user = array('' => '') + DB::table('users')->lists('name','id');
        $now = Carbon::now();
        $purposes = DB::table('psl_purposes')->lists('name','id');
        $taglist = DB::table('psl_call_psl_purpose')->where('psl_call_id',$call->id)->get();
        return view('pslcall.edit',compact('branch','port','jetty','principal','user','now','purposes','call','taglist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PslCall $call)
    {
        $this->validate($request, [
            'vessel_name' => 'required',
            'branch_id' => 'required',
            'port_id' => 'required',
            'jetty_id' => 'required',
            'principal_id' => 'required',
            'voyage_no' => 'required',
            'employee_id' => 'required',
        ]);
        $input['branch_id'] = $request->branch_id;
        $input['vessel_name'] = $request->vessel_name;
        $input['port_id'] = $request->port_id;
        $input['jetty_id'] = $request->jetty_id;
        $input['voyage_no'] = $request->voyage_no;
        $input['principal_id'] = $request->principal_id;
        $input['reference_no'] = $request->voyage_no;
        $input['eta_estimate_time'] = $request->eta_estimate_time;
        $input['etb_estimate_time'] = $request->etb_estimate_time;
        $input['etc_estimate_time'] = $request->etc_estimate_time;
        $input['etd_estimate_time'] = $request->etd_estimate_time;
        $input['ata_actual_time'] = $request->ata_actual_time;
        $input['atb_actual_time'] = $request->atb_actual_time;
        $input['atc_actual_time'] = $request->atc_actual_time;
        $input['atd_actual_time'] = $request->atd_actual_time;
        $input['previous_port_id'] = $request->previous_port_id;
        $input['next_port_id'] = $request->next_port_id;
        $input['employee_id'] = $request->employee_id;
        $input['quality_rating'] = $request->quality_rating;
        $input['cancel_call'] = $request->cancel_call;
        $input['cancel_remark'] = $request->cancel_remark;
        $input['no_cost_time'] = $request->no_cost_time;
        $input['no_cost_time_remark'] = $request->no_cost_time_remark;

        $call->update($input);
        return Redirect::route('calls.show',$call->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
