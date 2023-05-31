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
        <p>Package Description: {{$customerPackages->packageDescription}}</p>
            <p>Location Status:{{$locationStatus}}</p> 
            <p>Date of departure: {{$dateOfArrival}}</p>
            <p>Estimated Time of arrival: {{$dateOfDeparture}}</p>
        
        
            <a href="/customerpackage" class="btn btn-primary"> 
                <span>
                    <<
                </span>
                Go Back</a>
            <a class="btn btn-primary" href="/show-pdf/{{$customerPackages->id}}">
                View Invoice</a>
        
        </div>
</div>

@endsection