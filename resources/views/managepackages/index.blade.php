@extends('layouts.app')

@section('content')

<div class="container">
<h1>Incomming Packages</h1>

<a href="/home" class="btn btn-primary">
    <span><<</span>Go Back</a>

<p>Search and filter for packages</p>

<form action="{{ route('search.incoming.packages') }}" method="GET">
    <label for="tracking_number">Search Original Tracking #:</label>
    <input type="text" name="tracking_number">
    <label for="customer_name">Search By Customer Name:</label>
    <input type="text" name="customer_name">
    <input type="submit" class="btn btn-primary">
</form>
<table class="table table-striped table-hover table-override">
    <thead>
            <tr>
                <th>Customer Tracking #</th>
                <th>Three G - Tracking #</th>
                <th>Customer Name</th>
                <th>Package Description</th>
                <th>Receive Package</th>
            </tr>
    </thead>
            @if(count($customerPackages) > 0)
                    @foreach ($customerPackages as $customerPackage)
                            <tr>
                                <td>{{$customerPackage->originaltrackingnumber}}</td>
                                <td>{{$customerPackage->newtrackingnumber}}</td>
                                <td>{{$customerPackage->customername}}</td>
                                <td>{{$customerPackage->packageDescription}}</td>
                                <td><a href="/managepackages/create/{{$customerPackage->id}}" class="btn btn-primary">Receive Package</a></td>
                            </tr>
                     @endforeach  

                    @else
                    <tr> <td colspan="5"><h1>No Packages</h1></td></tr>
        @endIf
    </table>
          


</div>



@endsection