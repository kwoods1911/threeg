@extends('layouts.app')

@section('content')


<div class="container">
    <h1>List of accounts</h1>
    <a href="/home" class="btn btn-primary">
        <span><<</span>
        Go Back</a>
    <p>List of accounts</p>
        <table class="table table-striped table-hover">
                <tr>
                    <th>User ID #</th>
                    <th>Username</th>
                    <th>Account Type</th>
                    <th>Account Details</th>
                    <th>Remove</th>
                </tr>
         @if(count($accounts) > 0)
         @foreach($accounts as $data)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->user_role}}</td>
                                <td><a href="/manageaccounts/{{$data->id}}" class="btn btn-primary">View Details</a></td>
                                <td>
                                    {!!Form::open(['action' => ['App\Http\Controllers\ManageAccountsController@destroy',$data->id], 'method' => 'POST'])!!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                </td>
    
                            </tr>
                            @endforeach
          @endif                  
    </table>
    <a href="/manageaccounts/create" class="btn btn-primary"> Create Account</a>
</div>



@endsection

