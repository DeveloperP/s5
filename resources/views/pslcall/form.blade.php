<!--form-header-bar -->
    <div class="row">
        <div class="panel- panel-primary" id="button-bar">
            <button class="form-btn" type="submit">
                <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>&nbsp;<b>{{$submit_text}}</b>
            </button>
            <button class="form-btn" type="reset">
                <span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>&nbsp;<b>RESET</b>
            </button>
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
                            <span class="required" v-if="! newCall.branch_id">*</span>
                        </div>
                        <div class="col-md-8">
                            {!! Form::select('branch_id',array_map('strtoupper', $branch),null,['class' => 'input-field input-sm','v-model'=>'newCall.branch_id']) !!}
                            @if ($errors->has('branch_id'))
                                <span class="error"><i class="glyphicon glyphicon-warning-sign" data-toggle="tooltip" data-placement="top" title="{{ $errors->first('branch_id') }}"></i></span>
                            @endIf
                        </div>

                        <div class="col-md-4">
                            {!! Form::label('vessel_name', 'Vessel',['class'=>'control-label']) !!}
                            <span class="required" v-if="! newCall.vessel_name">*</span>
                        </div>
                        <div class="col-md-8">
                            {!! Form::text('vessel_name',null,['class' => 'input-field input-sm text-upper','placeholder'=>'VESEEL NAME','v-model'=>'newCall.vessel_name']) !!}
                            @if ($errors->has('vessel_name'))
                                <span class="error"><i class="glyphicon glyphicon-warning-sign" data-toggle="tooltip" data-placement="top" title="{{ $errors->first('vessel_name') }}"></i></span>
                            @endIf
                        </div>


                        <div class="col-md-4">
                            {!! Form::label('port_id', 'Port',['class'=>'control-label']) !!}
                            <span class="required" v-if="! newCall.port_id">*</span>
                        </div>
                        <div class="col-md-8">
                            {!! Form::select('port_id',array_map('strtoupper', $port),null,['class' => 'input-field input-sm','v-model'=>'newCall.port_id']) !!}
                            @if ($errors->has('port_id'))
                                <span class="error"><i class="glyphicon glyphicon-warning-sign" data-toggle="tooltip" data-placement="top" title="{{ $errors->first('port_id') }}"></i></span>
                            @endIf
                        </div>

                        <div class="col-md-4">
                            {!! Form::label('jetty_id', 'Jetty',['class'=>'control-label']) !!}
                            <span class="required" v-if="! newCall.jetty_id">*</span>
                        </div>
                        <div class="col-md-8">
                            {!! Form::select('jetty_id',array_map('strtoupper', $jetty),null,['class' => 'input-field input-sm','v-model'=>'newCall.jetty_id']) !!}
                            @if ($errors->has('jetty_id'))
                                <span class="error"><i class="glyphicon glyphicon-warning-sign" data-toggle="tooltip" data-placement="top" title="{{ $errors->first('jetty_id') }}"></i></span>
                                @endIf
                        </div>

                        <div class="col-md-4">
                            {!! Form::label('voyage_no', 'Voyage No',['class'=>'control-label']) !!}
                            <span class="required" v-if="! newCall.voyage_no">*</span>
                        </div>
                        <div class="col-md-8">
                            {!! Form::text('voyage_no',null,['class' => 'input-field input-sm text-upper','placeholder'=>'VOYAGE NO','v-model'=>'newCall.voyage_no']) !!}
                            @if ($errors->has('voyage_no'))
                                <span class="error"><i class="glyphicon glyphicon-warning-sign" data-toggle="tooltip" data-placement="top" title="{{ $errors->first('voyage_no') }}"></i></span>
                            @endIf
                        </div>

                        <div class="col-md-4">
                            {!! Form::label('principal_id', 'Principal',['class'=>'control-label']) !!}
                            <span class="required" v-if="! newCall.principal_id">*</span>
                        </div>
                        <div class="col-md-8">
                            {!! Form::select('principal_id',array_map('strtoupper', $principal),null,['class' => 'input-field input-sm','v-model'=>'newCall.principal_id']) !!}
                            @if ($errors->has('principal_id'))
                                <span class="error"><i class="glyphicon glyphicon-warning-sign" data-toggle="tooltip" data-placement="top" title="{{ $errors->first('principal_id') }}"></i></span>
                            @endIf
                        </div>

                        <div class="col-md-4">
                            {!! Form::label('reference_no', 'Reference No',['class'=>'control-label']) !!}
                        </div>
                        <div class="col-md-8">
                            {!! Form::text('reference_no',null,['class' => 'input-field input-sm text-upper','placeholder'=>'REFERNCE NO']) !!}
                            @if ($errors->has('reference_no'))
                                <span class="error"><i class="glyphicon glyphicon-warning-sign" data-toggle="tooltip" data-placement="top" title="{{ $errors->first('reference_no') }}"></i></span>
                            @endIf
                        </div>

                    </div>
                </div>
            </div>
            <!--End Details-->
            <!--Purpose-->
            <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <div class="col-md-3 ">
                            {!! Form::label('purposes', 'Purpose',['class'=>'control-label']) !!}
                        </div>
                        <div class="col-md-9">
                            {{Form::select('purposes[]',array_map('strtoupper', $purposes),null,['class'=>'col-md-9', 'multiple','style'=>'height: 290px'])}}
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
                                {!! Form::text('eta_estimate_time',null,['class' => 'input-field input-sm ','id'=>"etadatetime"]) !!}
                                </div>
                            </div>

                            <div class="row">
                                {!! Form::label('etbdatetime', 'ETB ',['class'=>'control-label col-md-3 ']) !!}
                                <div class="col-md-9">
                                    {!! Form::text('etb_estimate_time',null,['class' => 'input-field input-sm ','id'=>"etbdatetime"]) !!}
                                </div>
                            </div>

                            <div class="row">
                                {!! Form::label('etcdatetime', 'ETC ',['class'=>'control-label col-md-3 ']) !!}
                                <div class="col-md-9">
                                    {!! Form::text('etc_estimate_time',null,['class' => 'input-field input-sm ','id'=>"etcdatetime"]) !!}
                                </div>
                            </div>

                            <div class="row">
                                {!! Form::label('etddatetime', 'ETD ',['class'=>'control-label col-md-3 ']) !!}
                                <div class="col-md-9">
                                    {!! Form::text('etd_estimate_time',null,['class' => 'input-field input-sm ','id'=>"etddatetime"]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                {!! Form::label('atadatetime', 'ATA ',['class'=>'control-label col-md-3 ']) !!}
                                <div class="col-md-9">
                                    {!! Form::text('ata_actual_time',null,['class' => 'input-field input-sm ','disabled','id'=>"atadatetime"]) !!}
                                </div>
                            </div>

                            <div class="row">
                                {!! Form::label('atbdatetime', 'ATB ',['class'=>'control-label col-md-3 ']) !!}
                                <div class="col-md-9">
                                    {!! Form::text('atb_actual_time',null,['class' => 'input-field input-sm ','disabled','id'=>"atbdatetime"]) !!}
                                </div>
                            </div>

                            <div class="row">
                                {!! Form::label('atcdatetime', 'ATC ',['class'=>'control-label col-md-3 ']) !!}
                                <div class="col-md-9">
                                    {!! Form::text('atc_actual_time',null,['class' => 'input-field input-sm ','disabled','id'=>"atcdatetime"]) !!}
                                </div>
                            </div>

                            <div class="row">
                                {!! Form::label('atddatetime', 'ATD ',['class'=>'control-label col-md-3 ']) !!}
                                <div class="col-md-9">
                                    {!! Form::text('atd_actual_time',null,['class' => 'input-field input-sm ','disabled','id'=>"atddatetime"]) !!}
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
                            {!! Form::select('previous_port_id',array_map('strtoupper', $port),null,['class' => 'input-field input-sm']) !!}
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('next_port_id', 'Next Port',['class'=>'control-label ']) !!}
                        </div>
                        <div class="col-md-8">
                            {!! Form::select('next_port_id',array_map('strtoupper', $port),null,['class' => 'input-field input-sm']) !!}
                        </div>
                        <div class="col-md-4">
                            {!! Form::label('employee_id', 'On Duty Employee',['class'=>'control-label ']) !!}
                            <span class="required" v-if="! newCall.employee_id">*</span>
                        </div>
                        <div class="col-md-8">
                            {!! Form::select('employee_id',array_map('strtoupper', $user),null,['class' => 'input-field input-sm','v-model'=>'newCall.employee_id']) !!}
                            @if ($errors->has('employee_id'))
                                <span class="error"><i class="glyphicon glyphicon-warning-sign" data-toggle="tooltip" data-placement="top" title="{{ $errors->first('employee_id') }}"></i></span>
                                @endIf
                        </div>

                        <div class="col-md-4">
                            {!! Form::label('verifytime', 'Verified At',['class'=>'control-label ']) !!}
                        </div>
                        <div class="col-md-8">
                            {!! Form::text('verifytime',$now,['class' => 'input-field input-sm','disabled']) !!}
                        </div>

                        <div class="col-md-4">
                            {!! Form::label('quality_rating', 'Quality Ratings',['class'=>'control-label ']) !!}
                        </div>
                        <div class="col-md-3">
                            {!! Form::select('quality_rating',array(1,2,3,4,5,6,7,8,9,10),null,['class' => 'input-field input-sm']) !!}
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="col-md-3 col-sm-6">
                                    <div class="checkbox">
                                        <label>
                                            {{ Form::checkbox('fda', '1') }}<b>FDA</b>
                                        </label>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="checkbox">
                                        <label>
                                            {{ Form::checkbox('pda', '1') }}<b>PDA</b>
                                        </label>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="hidden" name="cancel_call" value="0">
                                            <input type="checkbox" value="1" v-model="showcall" name="cancel_call" ><b>Cancel Call</b>
                                        </label>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 " v-show="showcall">
                            {!! Form::textarea('cancel_remark',null,['class' => 'form-control input-sm ','rows'=>'3','placeholder'=>'Cancel Remark']) !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <div class="col-md-4">
                            {!! Form::label('time_saving', 'Time Saving',['class'=>'control-label ']) !!}
                        </div>
                        <div class="col-md-8">
                            {!! Form::text('time_saving',null,['class' => 'input-field input-sm','disabled']) !!}
                        </div>

                        <div class="col-md-4">
                            {!! Form::label('cost_saving', 'Cost Saving',['class'=>'control-label ']) !!}
                        </div>
                        <div class="col-md-5">
                            {!! Form::text('cost_saving',null,['class' => 'input-field input-sm','disabled']) !!}
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="checkbox">
                                <input type="hidden" name="no_cost_time" value="0">
                                <input type="checkbox" value="1" v-model="show_cost" name="no_cost_time" ><b>No Cost Time Saving Archived</b>
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-md-12 col-sm-12" v-show="show_cost" >
                            {!! Form::textarea('no_cost_time_remark',null,['class' => 'form-control input-sm ','rows'=>'3','placeholder'=>'No Cost Time Remarks']) !!}
                        </div>

                    </div>
                </div>
            </div>


        </div><!-- form-right-side -->
    </div>




