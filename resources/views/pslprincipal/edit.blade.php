@extends('layouts.main')

@section('content')
    <div  class="container-fluid" id="content-new">
        <h3><span class="glyphicon glyphicon-list" aria-hidden="true"></span>&nbsp;PRINCIPAL LIST : EDIT</h3>
        <div class="well">
            @if (Session::has('message'))
                <div class="alert alert-success alert-dismissible" role="alert" id="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <img src="{{ asset("image/icon/ok.png") }}" width="30px" height="30px" alt="ok">
                    <strong>Success!</strong>  <p>{{ Session::get('message') }}</p>
                </div>
            @endif
            {!! Form::model($principal, ['method' => 'PATCH', 'route' => ['principals.update', $principal->id],'class'=>'form-horizontal','role'=>'form']) !!}
            {{ csrf_field() }}

            <div class="panel- panel-primary" id="button-bar">
                <button class="form-btn" type="submit">
                    <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span>&nbsp;<b>SAVE</b>
                </button>
                <button class="form-btn" type="reset">
                    <span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>&nbsp;<b>RESET</b>
                </button>
                <a href="{{ route('principals.index') }}" id="btn-link">
                    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>&nbsp;<b>ADD NEW</b>
                </a>
            </div>

            <div class="panel panel-primary">
                <div class="panel-body">
                    <div class="col-sm-4  text-right hidden-xs">
                        {!! Form::label('principal_name','Jetty Name :',null,['class' => 'control-label']) !!}
                        <span class="error" v-if="! newPrincipal.principal_name">*</span>
                    </div>
                    <div class="col-sm-4 hidden-sm hidden-md hidden-lg">
                        {!! Form::label('principal_name','Jetty Name :',null,['class' => 'control-label']) !!}
                        <span class="error" v-if="! newPrincipal.principal_name">*</span>
                    </div>
                    <div class="col-sm-6">
                        {!! Form::text('principal_name',null,['class' => 'input-field input-sm text-upper border-2px','v-model'=>'newPrincipal.principal_name','style'=>'text-transform:uppercase']) !!}
                        @if ($errors->has('principal_name'))
                            <span class="error"><i class="glyphicon glyphicon-warning-sign" data-toggle="tooltip" data-placement="right" title="{{ $errors->first('principal_name') }}"></i></span>
                            @endIf
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>

            <br>


            <div class="panel panel-primary">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered principal" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Principal Name</th>
                                <th width="60px;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($principals as $principal)
                                <tr>
                                    <td class="text-center">{{$principal->id}}</td>
                                    <td>{{strtoupper($principal->principal_name)}}</td>
                                    <td>
                                        <div class="action-icon">
                                            <a href="{!! route('principals.edit',$principal->id) !!}" >
                                                <button class="btn-xs form-btn">
                                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                </button>
                                            </a>
                                        </div>
                                        <div class="action-icon">
                                            {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('principals.destroy', $principal->id))) !!}
                                            <button type="submit" class="btn-xs form-btn confirmation-callback" data-placement="left"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                                            {!! Form::close() !!}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

        </div></div>
@endsection
@push('scripts')
<script>
    $('.principal').DataTable({
        select:true,
        "order": [[ 0, "asc" ]]
    } );

</script>

@endpush