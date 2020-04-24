@extends('layouts.admin')
@section('content')



    {!! Form::model($user,['method'=>'PATCH','action'=>['Admin@update',$user->id],'files'=>true]) !!}



    <center>
    <h2>Account Information</h2>
            <img height=100 class="img logo rounded-circle mb-5"src="{{asset($user->photo ? $user->photo->path: 'https://placehold.it/400x400')}}"  class="img-responsive img-rounded"></br>
        </center>
    <div class="form-group">
        {!! Form::label('name','Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email','Email:') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password','Password:') !!}
        {!! Form::text('password',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('is_active','Status:') !!}
        {!! Form::select('is_active',[''=>'Choose Option',1=>'Active',0=>'Not Active'],null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group" style="margin-top: 1.5rem" >

        {!! Form::label('Choose Picture','') !!}
        {!! Form::file('photo_id') !!}
    </div>
    <center>
    <table style="width: 120px">
        <td>

    <div class="form-group">
        {!! Form::submit('Update Account',['class'=>'btn btn-primary ']) !!}
    </div>
    {!! Form::close() !!}
        </td>
        <td>
    {!! Form::model($user,['method'=>'DELETE','action'=>['AdminPatientController@destroy',$user->id]]) !!}


    <div class="form-group">
        {!! Form::submit('Delete Account',['class'=>'btn btn-danger']) !!}
    </div>
        </td>
    {!! Form::close() !!}
    </table>
    </center>
@stop
