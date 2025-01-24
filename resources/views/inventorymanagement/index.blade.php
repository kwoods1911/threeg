@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Inventory</h1>

<a href="/home" class="btn btn-primary">
    <span><<</span>
    Go Back</a>
<p>Packages in inventory.</p>


{{-- <form action="">
    <label for="">Search Original Tracking #:</label>
    <input type="text">
    <label for="">Search By Customer Name:</label>
    <input type="text">
    <input type="submit">
</form> --}}
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                {{-- <th>Origi Tracking #</th> --}}
                <th>Three G - Tracking #</th>
                {{-- <th>Customer Id</th> --}}
                <th>Customer Name</th>
                <th>Package Description</th>
                <th>Ship. Details</th>
                <th>Edit Details</th>
                {{-- <th>Create Invoice</th> --}}
                <th>Delete</th>
            </tr>
        </thead>
            @if(count($inventorypackages) > 0)
                    @foreach ($inventorypackages as $package)
                        <tr>
                            {{-- <td>{{$package->originaltrackingnumber}}</td> --}}
                            <td>{{$package->newtrackingnumberbarcode}}</td>
                            {{-- <td>{{$package->customerid}}</td> --}}
                            <td>{{$package->customername}}</td>
                            <td>{{$package->packagedescription}}</td>
                            <td><a href="/inventorymanagement/{{$package->id}}" class="btn btn-info">Details</a></td>
                            <td><a href="/inventorymanagement/{{$package->id}}/edit" class="btn btn-primary">Edit Ship.</a></td>
                            {{-- <td><a href="/invoicemanagement/createinvoice/{{$package->id}}" class="btn btn-primary">Create Inv.</a></td>  --}}
                            <td>
                                {!!Form::open(['action' => ['App\Http\Controllers\InventoryManagementController@destroy',$package->id], 'method' => 'POST'])!!}
                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                            </td>
                        </tr>
                    @endforeach
            @endIf
</table>
</div>
@endsection

