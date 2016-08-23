@extends('layouts.main')

@section('content')
    <div class="panel panel-primary col-md-12" id="content">
        <div class="panel-heading">
            <label class="radio-inline"><input type="radio" value="">Active</label>
            <label class="radio-inline"><input type="radio" value="">In Port</label>
            <label class="radio-inline"><input type="radio" value="">Sailed</label>
            <label class="radio-inline"><input type="radio" value="">All</label>
        </div>
        <div class="panel-body">

    <table class="table table-striped table-bordered calls" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>CALL NO</th>
            <th>PORT</th>
            <th>ARRIVAL</th>
            <th>PRINCIPAL</th>
            <th>PURPOSE</th>
            <th>VESSEL</th>
        </tr>
        </thead>
        <tbody>
        @foreach($calls as $call)
            <tr>
                <td id="tab">{{ $call->id }}</td>
                <td>{{strtoupper($call->port->port_name)}}</td>
                <td id="tab">{{$call->eta_estimate_time}}</td>
                <td><a href="{!! route('calls.show',$call->id) !!}">{{strtoupper($call->principal->principal_name)}}</a> </td>
                <td>
                    @unless($call->purposes->isEmpty())
                    @foreach($call->purposes as $propose)
                        {{ strtoupper($propose->name) }},
                    @endforeach
                    @endunless
                </td>
                <td>{{strtoupper($call->vessel_name)}}</td>
            </tr>
        @endforeach
    </table>
</div>
        </div>
@endsection
@push('scripts')
<script>
    $('.calls').DataTable({
        select:true,
        "order": [[ 0, "desc" ]]
    } );

</script>

@endpush
