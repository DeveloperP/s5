@extends('layouts.main')

@section('content')

<div class="container-fluid">
    <div class="col-md-12 well" id="content">
        {!! Form::model(new App\Models\Pslcall, ['route' => ['calls.store']]) !!}
        {{ csrf_field() }}
        @include('pslcall.form',['submit_text' => 'SAVE'])
        {!! Form::close() !!}
    </div>
</div>
@endsection