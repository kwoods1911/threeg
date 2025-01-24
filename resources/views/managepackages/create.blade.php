@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Receive Package</h1>
<a href="/managepackages" class="btn btn-primary">
    Go Back</a>

{{-- {{$customerpackage->id}} --}}

{{-- {{"Test" . $customerpackage->id}} --}}

{!! Form::open(['action' => 'App\Http\Controllers\ManagePackagesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
<div class="form-group">
    {{Form::hidden('customerid',$customerpackage->customerid,['class' => 'form-control', 'placeholder' => 'Customer id'])}}
    {{Form::hidden('customer_package_id',$customerpackage->id,['class' => 'form-control', 'placeholder' => 'Customer id'])}}
</div>

<div class="form-group">
    {{Form::label('newtrackingnumber', ' New Tracking Number')}} <span>:</span>
    {{Form::text('newtrackingnumber',$customerpackage->newtrackingnumber,['class' => 'form-control', 'placeholder' => 'Tracking Number'])}}
</div>

<div class="form-group">
    {{Form::label('originaltrackingnumber', 'Original tracking number')}} <span>:</span>
    {{Form::text('originaltrackingnumber',$customerpackage->originaltrackingnumber,['class' => 'form-control', 'placeholder' => 'Package Description'])}}
</div>

<div class="form-group">
    {{Form::label('customername', 'Customer Name')}} <span>:</span>
    {{Form::text('customername',$customerpackage->customername,['class' => 'form-control', 'placeholder' => 'John Doe'])}}
</div>

<p>Write a brief description of the package. E.g Clothes, jordans</p>
<div class="form-group">
    {{Form::label('packagedescription', 'Package Description')}} <span>:</span>
    {{Form::text('packagedescription',$customerpackage->packageDescription,['class' => 'form-control', 'placeholder' => 'Package Description'])}}
</div>

<div class="form-group">
    {{Form::label('packageweight', 'Package Weight')}} <span>:</span>
    {{Form::number('packageweight','',['class' => 'form-control', 'placeholder' => 0.00])}}
</div>

<div class="form-group">
    {{Form::label('locationstatus', 'Location Status of Package')}} <span>:</span>
    {{Form::select('locationstatus', ['Miami Warehouse' => 'Miami Warehouse', 'Nassau Warehouse' => 'Nassau Warehouse'], 'Miami Warehouse')}}
</div>

{{-- <div class="form-group">
    {{Form::label('deliverycustomercollection', 'Delivery Method')}} <span>:</span>
    {{Form::select('deliverycustomercollection', ['Pick Up' => 'Pick Up', 'Delivery' => 'Delivery'], $customerpackage->delivery_method)}}
</div> --}}

<div class="form-group">
    {{Form::label('dateofarrival', 'Date of arrival')}} <span>:</span>
    {{Form::date('dateofarrival', \Carbon\Carbon::now())}}
</div>

<div class="form-group">
    {{Form::label('dateofshipment', 'Date of shipment')}} <span>:</span>
    {{Form::date('dateofshipment', \Carbon\Carbon::now())}}
</div>
{{Form::submit('Receive Package',['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
</div>
@endsection