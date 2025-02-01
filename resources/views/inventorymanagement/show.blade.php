@extends('layouts.app')

@section('content')

@php
//KW run query to find corresponding customer id to package it.
use App\Models\CustomerPackage;
use Illuminate\Support\Facades\DB;
$trackingNumber = $package->newtrackingnumberbarcode;
$customerPackageNumber = DB::select("SELECT id FROM customer_packages WHERE newtrackingnumber = $trackingNumber");

//KW select customer package from
//Select invoice from customer package
@endphp

<div class="container">
<a href="/inventorymanagement" class="btn btn-primary">
    <span><<</span>
    Return
</a>

            <div class="p-3 mb-2 bg-secondary-subtle text-secondary-emphasis">
                <h1>Manage Invoice</h1>
                    <table class="table table-bordered">
                        <tr>
                                <td><a href="/invoicemanagement/createinvoice/{{$package->id}}" class="btn btn-primary">Create Invoice</a></td>
                                <td><a href="/invoicemanagement/{{$package->id}}/edit" class="btn btn-primary">Update Invoice</a></td>
                                <td><a href="/invoicemanagement/{{$package->id}}" class="btn btn-primary">View Invoice</a></td>
                        </tr>  
                    </table>
                </div>

    
    

    <table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>
            <h1>Shipment Details</h1>
            </th>
        </tr>
        <tr>
            <th><h4>Manager ID# {{$package->managerid}}</h4></th>
        </tr>

        <tr>
            <th><h4>Received By: {{$package->managername}}</h4></th>
        </tr>
    </thead>
        <tr>
            <th class="thead-dark">Package ID</th>
            <td>{{$package->id}}</td>
        </tr>
        <tr>
            <th>Customer Name:</th>
            <td>{{$package->customername}}</td>
        </tr>
    
        <tr>
            <th>Tracking #</th>
            <td>{{$package->newtrackingnumberbarcode}}</td>
        </tr>
    
        <tr>
            <th>Package Description</th>
            <td>{{$package->packagedescription}}</td>
        </tr>
    
        <tr>
            <th>Package Weight</th>
            <td>{{$package->package_weight}} lbs</td>
        </tr>
    
        <tr>
            <th>Date Of Arrival</th>
            <td>{{$package->dateofarrival}}</td>
        </tr>
    
        <tr>
            <th>Date of Shipment</th>
            <td>{{$package->dateofdeparture}}</td>
        </tr>
    
        <tr>
            <th>Delivery Method</th>
            <td>{{$package->deliverycustomercollection}}</td>
        </tr>
    
        <tr>
            <th>Package Invoice</th>
            <td>
                @if(count($customerPackageNumber) > 0)
                    <a target="_blank" href="/show-pdf/{{$customerPackageNumber[0]->id}}" class="btn btn-primary" >View Invoice</a>
                @else
                    No Invoice available.
                @endif
            </td>
        </tr>
    
    </table>
    
    

</div>



@endsection