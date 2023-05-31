@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Incomming Packages</h1>

<a href="/home" class="btn btn-primary">
    <span><<</span>
    Go Back</a>

<p>Search and filter for packages</p>

<form action="">
    <label for="">Search Original Tracking #:</label>
    <input type="text">
    <label for="">Search By Customer Name:</label>
    <input type="text">
    <input type="submit">
</form>
    <table class=" table table-striped table-hover">
            <tr>
                <th>Origi Tracking #</th>
                <th>Three G - Tracking #</th>
                <th>Customer Name</th>
                <th>Package Description</th>
                <th>Receive Package</th>
            </tr>
            @if(count($customerPackages) > 0)
                    @foreach ($customerPackages as $customerPackage)

                    @if ($customerPackage->package_received == '0')
                    <tr>
                        <td>{{$customerPackage->originaltrackingnumber}}</td>
                        <td>{{$customerPackage->newtrackingnumber}}</td>
                        <td>{{$customerPackage->customername}}</td>
                        <td>{{$customerPackage->packageDescription}}</td>
                        <td><a href="/managepackages/create/{{$customerPackage->id}}" class="btn btn-primary">Receive Package</a></td>
                    </tr>
                    @endif
                        
                @endforeach

            @endIf
</table>
</div>

@endsection