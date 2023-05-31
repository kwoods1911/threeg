@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Account</h1>
<a href="/manageaccounts" class="btn btn-primary"><span><<</span>  Go Back</a>



{!! Form::open(['action' => 'App\Http\Controllers\ManageAccountsController@store', 'method' => 'POST']) !!}

<div class="form-group">
    {{Form::label('name', 'Name')}} <span>:</span>
    {{Form::text('name','',['class' => 'form-control', 'placeholder' => 'John Doe'])}}
</div>

<div class="form-group">
    {{Form::label('email', 'Email')}} <span>:</span>
    {{Form::email('email','',['class' => 'form-control', 'placeholder' => 'email'])}}
</div>

<div class="form-group">
    {{Form::label('confirm_email', 'Confirm Email')}} <span>:</span>
    {{Form::email('confirm_email','',['class' => 'form-control', 'placeholder' => 'email'])}}
</div>

<div class="form-group">
    {{Form::label('password', 'Password')}} <span>:</span>
    {{Form::password('password',['class' => 'form-control', 'placeholder' => '12345'])}}
</div>

<div class="form-group">
    {{Form::label('confirm_password', 'Confirm Password')}} <span>:</span>
    {{Form::password('confirm_password',['class' => 'form-control', 'placeholder' => '12345'])}}
</div>

<div class="form-group">
    {{Form::label('user_role', 'User Role')}} <span>:</span>
    {{Form::select('user_role', ['customer' => 'Customer', 'admin' => 'Administrator'], 'customer')}}
</div>

{{Form::submit('Create Account',['class' => 'btn btn-secondary'])}}
{!! Form::close() !!}
</div>
@endsection