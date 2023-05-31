@extends('layouts.app');

@section('content')
<div class="container">
    <h1>Create Invoice For Package</h1>

    <h3>Manager Name: {{$package->managername}} </h3>

    <a href="/inventorymanagement" class="btn btn-primary"> 
        <span><<</span>
        Go Back</a>
{!! Form::open(['action' => 'App\Http\Controllers\ModifyInvoiceController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

<div class="form-group">
    {{Form::label('packageid', 'Package Id')}} <span>:</span>
    {{Form::text('packageid',$package->id,['class' => 'form-control','placeholder' => 'id'])}}
</div>

<div class="form-group">
    {{Form::label('itemvalue', 'Item Value')}} <span>:</span>
    {{Form::number('itemvalue',0,['class' => 'form-control','placeholder' => 0.00])}}
</div>

<div class="form-group">
    {{Form::label('customdutyrate', 'Custom Duty Rate')}} <span>:</span>
    {{Form::number('customdutyrate','',['class' => 'form-control','placeholder' => 0.00])}}
</div>

<div class="form-group">
    {{Form::label('itemcategory', 'Item Category')}} <span>:</span>
    {{Form::text('itemcategory','',['class' => 'form-control','placeholder' => 'e.g Electronics'])}}
</div>


<div class="form-group">
    {{Form::label('shippingrate', 'Shipping Rate')}} <span>:</span>
    {{Form::number('shippingrate',1.20,['class' => 'form-control','placeholder' => 0.00])}}
</div>

<div class="form-group">
    {{Form::label('packageweight', 'Package Weight (LBS)')}} <span>:</span>
    {{Form::number('packageweight',$package->package_weight,['class' => 'form-control','placeholder' => 0.00])}}
</div>

{{Form::submit('Calculate',['class' => 'btn btn-secondary'])}}
{!! Form::close() !!}
</div>
@endsection