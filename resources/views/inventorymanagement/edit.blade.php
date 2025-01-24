@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Edit Package</h1>
        <a href="/inventorymanagement" class="btn btn-primary">
            <span><<</span>
            Go Back</a>
        
        {{-- {!! Form::open(['action' => ['App\Http\Controllers\ManageAccountsController@update', $account->id], 'method' => 'POST']) !!} --}}
        
        {!! Form::open(['action' => ['App\Http\Controllers\InventoryManagementController@update',$package->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::hidden('customerid',$package->id,['class' => 'form-control', 'placeholder' => 'Customer id'])}}
        </div>
        <h6>
            Three G Tracking #:
            {{Form::hidden('newtrackingnumber',$package->newtrackingnumberbarcode,['class' => 'form-control', 'placeholder' => 'Customer id'])}}
        </h6>
        <h3>{{$package->newtrackingnumberbarcode}}</h3>
        
        <h6>
            Original Tracking #:
            {{Form::hidden('originaltrackingnumber',$package->originaltrackingnumber,['class' => 'form-control', 'placeholder' => 'Customer id'])}}
        </h6>
        <h3>{{$package->originaltrackingnumber}}</h3>
        
        <h6>
            Customer Name: 
            {{Form::hidden('customername',$package->customername,['class' => 'form-control', 'placeholder' => 'Customer id'])}}
        </h6>
        <h3>{{$package->customername}}</h3>
        
        <h6>
            Package Description: 
            {{Form::hidden('customername',$package->packagedescription,['class' => 'form-control', 'placeholder' => 'Customer id'])}}
        </h6>
        <h3>{{$package->packagedescription}}</h3>
        
        <div class="form-group">
            {{Form::label('packageweight', 'Package Weight')}} <span>:</span>
            {{Form::number('packageweight',$package->package_weight,['class' => 'form-control', 'placeholder' => 0.00])}}
        </div>
        
        <div class="form-group">
            {{Form::label('locationstatus', 'Location Status of Package')}} <span>:</span>
            {{Form::select('locationstatus', ['Miami Warehouse' => 'Miami Warehouse', 'Nassau Warehouse' => 'Nassau Warehouse','ITN' => 'In transit to Nassau'], $package->deliverycustomercollection,['class' => 'form-control'])}}
        </div>
        
        {{-- <div class="form-group">
            {{Form::label('deliverycustomercollection', 'Delivery Method')}} <span>:</span>
            {{Form::select('deliverycustomercollection', ['Pick Up' => 'Pick Up', 'Delivery' => 'Delivery'], $customerpackage->delivery_method)}}
        </div> --}}
        
        <div class="form-group">
            {{Form::label('dateofarrival', 'Date of arrival')}} <span>:</span>
            {{Form::date('dateofarrival', \Carbon\Carbon::now(),['class' => 'form-control'])}}
        </div>
        
        <div class="form-group">
            {{Form::label('dateofshipment', 'Date of shipment')}} <span>:</span>
            {{Form::date('dateofshipment', \Carbon\Carbon::now(),['class' => 'form-control'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Edit Shipment Detail',['class' => 'btn btn-secondary'])}}
        {!! Form::close() !!}
    </div>
@endsection