@extends('layouts.main')

@section('content')
    @include('layouts.sidebar')
    <div class="container-fluid">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 well" id="content">
            <!--form-header-bar -->
            <div class="row">
                <div class="panel- panel-primary" id="button-bar">
                    <a href="{{route('calls.edit',$call->id)}}"><button class="form-btn" type="submit">
                        <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>&nbsp;<b>EDIT</b>
                    </button>
                    </a>
                </div>
            </div>
            <!--end-form-header-bar -->

            <div class="row">
                <!--form-left-side -->
                <div class="col-sm-6">
                    <!--Details-->
                    <div class="row">
                        <div class="panel panel-primary">
                            <div class="panel-body">
                                <div class="col-md-4">
                                    {!! Form::label('branch_id', 'Branch',['class'=>'control-label']) !!}
                                </div>
                                <div class="col-md-8">
                                    {!! Form::text('branch_id',strtoupper($call->branch->branch_name),['class' => 'input-field input-sm','v-model'=>'newCall.branch_id','disabled']) !!}
                                </div>

                                <div class="col-md-4">
                                    {!! Form::label('vessel_name', 'Vessel',['class'=>'control-label ']) !!}
                                </div>
                                <div class="col-md-8">
                                    {!! Form::text('vessel_name',strtoupper($call->vessel_name),['class' => 'input-field input-sm text-upper','disabled','placeholder'=>'VESEEL NAME','v-model'=>'newCall.vessel_name']) !!}
                                </div>

                                <div class="col-md-4">
                                    {!! Form::label('port_id', 'Port',['class'=>'control-label']) !!}
                                </div>
                                <div class="col-md-8">
                                    {!! Form::text('port_id',strtoupper($call->port->port_name),['class' => 'input-field input-sm','v-model'=>'newCall.port_id','disabled']) !!}
                                </div>

                                <div class="col-md-4">
                                    {!! Form::label('jetty_id', 'Jetty',['class'=>'control-label']) !!}
                                </div>
                                <div class="col-md-8">
                                    {!! Form::text('jetty_id',strtoupper($call->jetty->jetty_name),['disabled','class' => 'input-field input-sm','v-model'=>'newCall.jetty_id']) !!}
                                </div>

                                <div class="col-md-4">
                                    {!! Form::label('voyage_no', 'Voyage No',['class'=>'control-label']) !!}
                                </div>
                                <div class="col-md-8">
                                    {!! Form::text('voyage_no',strtoupper($call->voyage_no),['class' => 'input-field input-sm text-upper','placeholder'=>'VOYAGE NO','v-model'=>'newCall.voyage_no','disabled']) !!}

                                </div>

                                <div class="col-md-4">
                                    {!! Form::label('principal_id', 'Principal',['class'=>'control-label']) !!}
                                </div>
                                <div class="col-md-8">
                                    {!! Form::text('principal_id',strtoupper($call->principal->principal_name),['class' => 'input-field input-sm','v-model'=>'newCall.principal_id','disabled']) !!}

                                </div>

                                <div class="col-md-4">
                                    {!! Form::label('reference_no', 'Reference No',['class'=>'control-label']) !!}
                                </div>
                                <div class="col-md-8">
                                    {!! Form::text('reference_no',strtoupper($call->reference_no),['class' => 'input-field input-sm text-upper','placeholder'=>'REFERNCE NO','disabled']) !!}
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--End Details-->
                    <!--Purpose-->
                    <div class="row">
                        <div class="panel panel-primary">
                            <div class="panel-body">
                                <div class="col-md-3">
                                    {!! Form::label('purposes', 'Purpose',['class'=>'control-label']) !!}
                                </div>
                                <div class="col-md-9" style="height: 400px;">
                                    @unless($call->purposes->isEmpty())
                                        @foreach($call->purposes as $propose)
                                            <ul>
                                                <li>{{ strtoupper($propose->name) }}</li>
                                            </ul>
                                        @endforeach
                                    @endunless
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / form-left-side -->


                <!-- form-right-side -->
                <div class="col-sm-6">
                    <div class="row">
                        <div class="panel panel-primary">
                            <div class="panel-body">
                                <div class="col-md-6">
                                    <div class="row">
                                        {!! Form::label('etadatetime', 'ETA ',['class'=>'control-label col-md-3 ']) !!}
                                        <div class="col-md-9">
                                            {!! Form::text('eta_estimate_time',$call->eta_estimate_time,['disabled','class' => 'input-field input-sm ','id'=>"etadatetime"]) !!}
                                        </div>
                                    </div>

                                    <div class="row">
                                        {!! Form::label('etbdatetime', 'ETB ',['class'=>'control-label col-md-3 ']) !!}
                                        <div class="col-md-9">
                                            {!! Form::text('etb_estimate_time',$call->etb_estimate_time,['disabled','class' => 'input-field input-sm ','id'=>"etbdatetime"]) !!}
                                        </div>
                                    </div>

                                    <div class="row">
                                        {!! Form::label('etcdatetime', 'ETC ',['class'=>'control-label col-md-3 ']) !!}
                                        <div class="col-md-9">
                                            {!! Form::text('etc_estimate_time',$call->etc_estimate_time,['disabled','class' => 'input-field input-sm ','id'=>"etcdatetime"]) !!}
                                        </div>
                                    </div>

                                    <div class="row">
                                        {!! Form::label('etddatetime', 'ETD ',['class'=>'control-label col-md-3 ']) !!}
                                        <div class="col-md-9">
                                            {!! Form::text('etd_estimate_time',$call->etd_estimate_time,['disabled','class' => 'input-field input-sm ','id'=>"etddatetime"]) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        {!! Form::label('ata_actual_time', 'ATA ',['class'=>'control-label col-md-3 ']) !!}
                                        <div class="col-md-9">
                                            {!! Form::text('ata_actual_time',$call->ata_actual_time,['disabled','class' => 'input-field input-sm ','id'=>"atadatetime"]) !!}
                                        </div>
                                    </div>

                                    <div class="row">
                                        {!! Form::label('atb_actual_time', 'ATB ',['class'=>'control-label col-md-3 ']) !!}
                                        <div class="col-md-9">
                                            {!! Form::text('atb_actual_time',$call->atb_actual_time,['disabled','class' => 'input-field input-sm ','id'=>"atbdatetime"]) !!}
                                        </div>
                                    </div>

                                    <div class="row">
                                        {!! Form::label('atc_actual_time', 'ATC ',['class'=>'control-label col-md-3 ']) !!}
                                        <div class="col-md-9">
                                            {!! Form::text('atc_actual_time',$call->atc_actual_time,['disabled','class' => 'input-field input-sm ','id'=>"atcdatetime"]) !!}
                                        </div>
                                    </div>

                                    <div class="row">
                                        {!! Form::label('atd_actual_time', 'ETD ',['class'=>'control-label col-md-3 ']) !!}
                                        <div class="col-md-9">
                                            {!! Form::text('atd_actual_time',$call->atd_actual_time,['disabled','class' => 'input-field input-sm ','id'=>"atddatetime"]) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="panel panel-primary">
                            <div class="panel-body">
                                <div class="col-md-4">
                                    {!! Form::label('previous_port_id', 'Previous Port',['class'=>'control-label ']) !!}
                                </div>
                                <div class="col-md-8">
                                    @if($call->previous_port_id != 0)
                                    {!! Form::text('previous_port_id',strtoupper($call->previous_port->port_name),['disabled','class' => 'input-field input-sm']) !!}
                                    @else
                                        {!! Form::text('previous_port_id',null,['disabled','class' => 'input-field input-sm']) !!}
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    {!! Form::label('next_port_id', 'Next Port',['class'=>'control-label ']) !!}
                                </div>
                                <div class="col-md-8">
                                    @if($call->next_port_id != 0)
                                    {!! Form::text('next_port_id',strtoupper($call->next_port->port_name),['disabled','class' => 'input-field input-sm']) !!}
                                    @else
                                        {!! Form::text('next_port_id',null,['disabled','class' => 'input-field input-sm']) !!}
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    {!! Form::label('employee_id', 'On Duty Employee',['class'=>'control-label ']) !!}

                                </div>
                                <div class="col-md-8">
                                    {!! Form::text('employee_id',strtoupper($call->employee->name),['disabled','class' => 'input-field input-sm','v-model'=>'newCall.employee_id']) !!}
                                </div>

                                <div class="col-md-4">
                                    <label for="verifytime" class="control-label">Verified At</label>
                                </div>
                                <div class="col-md-8">
                                    {!! Form::text('quality_rating',$call->updated_at,['disabled','class' => 'input-field input-sm']) !!}
                                </div>

                                <div class="col-md-4">
                                    {!! Form::label('quality_rating', 'Quality Ratings',['class'=>'control-label ']) !!}
                                </div>
                                <div class="col-md-3">
                                    {!! Form::text('quality_rating',$call->quality_rating,['disabled','class' => 'input-field input-sm']) !!}
                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"><b>FDA</b>
                                                </label>
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"><b>PDA</b>
                                                </label>
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="col-md-6 col-sm-12">
                                            <div class="checkbox">
                                                <label>
                                                    {{ Form::checkbox('cancel_call','1',['v-model'=>'showcall']) }}<b>Cancel Call</b>
                                                </label>
                                            </div>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 ">
                                    {!! Form::textarea('cancel_remark',$call->cancel_remark,['disabled','class' => 'form-control input-sm ','rows'=>'3','placeholder'=>'Cancel Remark']) !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="panel panel-primary">
                            <div class="panel-body">
                                <div class="col-md-4">
                                    <label for="name" class="control-label">Time Saving</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="input-field input-sm" id="name" placeholder="name" data-error="Data type is invalid" disabled>

                                </div>

                                <div class="col-md-4">
                                    <label for="name" class="control-label">Cost Saving</label>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="input-field input-sm" id="name" placeholder="name" data-error="Data type is invalid" disabled>

                                </div>
                                <div class="col-md-4 hidden-sm hidden-xs">
                                    <label for="name" class="control-label">&nbsp;</label>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="input-field input-sm" id="name" placeholder="name" data-error="Data type is invalid" disabled>

                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="checkbox">
                                        <label>
                                            {{ Form::checkbox('no_cost_time',$call->no_cost_time,['v-model'=>'show_cost']) }}<b>No Cost Time Saving Archived</b>
                                        </label>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    {!! Form::textarea('no_cost_time_remark',$call->no_cost_time_remark,['disabled','class' => 'form-control input-sm ','rows'=>'3','placeholder'=>'No Cost Time Remarks']) !!}
                                </div>

                            </div>
                        </div>
                    </div>


                </div><!-- form-right-side -->
            </div>

        </div>
    </div>
@endsection