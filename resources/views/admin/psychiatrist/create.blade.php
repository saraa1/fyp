@extends('layouts.admin')
@section('content')
    <h1>
        <center>Add Psychiatrist Record</center>
    </h1>


    {!! Form::open  (['method'=>'POST','action'=>'AdminPsychiatristController@store','files'=>true]) !!}



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
        {!! Form::select('is_active',array([1=>'Active',0=>'Not Active']),null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        <input type="hidden" name="role_id" value="1">
    </div>
    <div class="form-group" style="margin-top: 1.5rem" >

        {!! Form::label('Choose Picture','') !!}
        {!! Form::file('photo_id') !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Submit',['class'=>'btn btn-primary col-sm-3']) !!}
    </div>
    {!! Form::close() !!}


@stop
