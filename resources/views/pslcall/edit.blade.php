@extends('layouts.main')

@section('content')
    @include('layouts.sidebar')
    <div class="container-fluid">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 well" id="content">
            {!! Form::model($call, ['method' => 'PATCH', 'route' => ['calls.update', $call->id],'class'=>'form-horizontal','role'=>'form']) !!}
            {{ csrf_field() }}
            @include('pslcall.edit_form',['submit_text' => 'UPDATE'])
            {!! Form::close() !!}
        </div>
    </div>
@endsection