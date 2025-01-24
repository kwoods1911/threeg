@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Shipment Reports</h1>

<a href="/home" class="btn btn-secondary">
    <span><<</span>
    Go Back</a>
<p>Reports here are generated based on the incomming packages.</p>

<a href="/shipmentreport/create" class="btn btn-secondary">Create New Report</a>

    <table class=" table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Report #</th>
                    <th>Date Created</th>
                    <th>Report Details</th>
                    <th>Edit Report</th>
                    <th>Delete Report</th>
                </tr>
            </thead>
     @if(count($reports) > 0)

     @foreach($reports as $report)
                        <tr>
                            <td>{{$report->id}}</td>
                            <td>{{$report->date_of_report}}</td>
                            <td><a href="/shipmentreport/{{$report->id}}" class="btn btn-primary" >Open Report</a></td>
                            {{-- <td><a href="/inventorymanagement/{{$package->id}}" class="btn btn-info">Details</a></td> --}}
                            <td><a href="/shipmentreport/{{$report->id}}/edit" class="btn btn-primary">Edit Report</a></td>
                             <td>
                                {!!Form::open(['action' => ['App\Http\Controllers\ShipmentReportController@destroy',$report->id], 'method' => 'POST'])!!}
                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                             </td>
                        </tr>
                        @endforeach

      @endif                  
</table>
</div>


@endsection

