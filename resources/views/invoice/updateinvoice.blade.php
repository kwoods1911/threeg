@extends('layouts.app');

@section('content')
    <div class="container">
        <h1>Update Invoice For Package</h1>
<a href="/inventorymanagement" class="btn btn-primary">
    <span><<
    </span>
    Go Back</a>
<h3>Manager Name: {{$package->managername}} </h3> 
    {{-- {!! Form::open(['action' => ['App\Http\Controllers\CustomerPackagesController@update',$customerPackages->id], 'method' => 'POST']) !!} --}}
    {!! Form::open(['action' => ['App\Http\Controllers\ModifyInvoiceController@update',$invoice[0]->id], 'method' => 'POST']) !!}
    
    <div class="form-group">
        {{Form::hidden('invoiceid',$invoice[0]->id,['class' => 'form-control', 'placeholder' => 'Customer id'])}}
    </div>
    <div class="form-group">
        {{Form::label('packageid', 'Package Id')}} <span>:</span>
        {{Form::text('packageid',$invoice[0]->packageid,['class' => 'form-control','placeholder' => 'id'])}}
    </div>
    
    <div class="form-group">
        {{Form::label('itemvalue', 'Item Value')}} <span>:</span>
        {{Form::number('itemvalue',$invoice[0]->item_value,['class' => 'form-control','placeholder' => 0.00])}}
    </div>
    
    <div class="form-group">
        {{Form::label('customdutyrate', 'Custom Duty Rate')}} <span>:</span>
        {{Form::number('customdutyrate',$invoice[0]->customs_rate,['class' => 'form-control','placeholder' => 0.00])}}
    </div>
    
    <div class="form-group">
        {{Form::label('itemcategory', 'Item Category')}} <span>:</span>
        {{Form::text('itemcategory',$invoice[0]->item_category,['class' => 'form-control','placeholder' => 'e.g Electronics'])}}
    </div>
    
    
    <div class="form-group">
        {{Form::label('shippingrate', 'Shipping Rate')}} <span>:</span>
        {{Form::number('shippingrate',1.20,['class' => 'form-control','placeholder' => 0.00])}}
    </div>
    
    <div class="form-group">
        {{Form::label('packageweight', 'Package Weight (LBS)')}} <span>:</span>
        {{Form::number('packageweight',$invoice[0]->package_weight,['class' => 'form-control','placeholder' => 0.00])}}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Update Invoice',['class' => 'btn btn-secondary'])}}
    {!! Form::close() !!}
    </div>
@endsection