@extends('layouts.app')

@section('content')

@php
//KW handling errors if package has not been received by manager variables will be displayed below.
$locationStatus = 'Awaiting Arrival in Miami';
$dateOfArrival ='N/A';
$dateOfDeparture = 'N/A';
 if($packageInformation == null){

 }else{
     //KW package has been received dynamic information about package will be displayed.
    $locationStatus = $packageInformation[0]->locationstatus;
    $dateOfArrival = $packageInformation[0]->dateofarrival;
    $dateOfDeparture = $packageInformation[0]->dateofdeparture;
 }
@endphp

<div class="container">
    <div class="package-details-container">
        <h1>Package Details</h1>

        <a href="/customerpackage" class="btn btn-primary"> 
                <span> <<</span>Return
        </a>
        
        <table class="table table-hover">
            <thead class="table-primary">
                <tr>
                    <td>Package Description</td>
                    <td>Location Status</td>
                    <td>Date of departure</td>
                    <td>Estimated time of Delivery</td>
                    <td>Uploaded Invoice</td>
                </tr>
            </thead>

            <tr>
                <td>{{$customerPackages->packageDescription}}</td>
                <td>{{$locationStatus}}</td>
                <td>{{$dateOfArrival}}</td>
                <td>{{$dateOfDeparture}}</td>
                <td> <a class="btn btn-primary" href="/show-pdf/{{$customerPackages->id}}">
                View Invoice</a></td>
            </tr>
        </table>
           
        
        </div>
</div>

@endsection