@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Create Report</h1>
    <p>Note: Reports are created based on a date range for all incomming packages.</p>
    <a href="/shipmentreport" class="btn btn-primary">
        <span><<</span>
            Go Back
        </a>
    {!! Form::open(['action' => 'App\Http\Controllers\ShipmentReportController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('start_date', 'Start Date')}} <span>:</span>
        {{Form::date('start_date', \Carbon\Carbon::now())}}
    </div>
    
    <div class="form-group">
        {{Form::label('end_date', 'End Date')}} <span>:</span>
        {{Form::date('end_date', \Carbon\Carbon::now())}}
    </div>
    {{Form::submit('Create Report',['class' => 'btn btn-secondary'])}}
    {!! Form::close() !!}
</div>



@endsection

