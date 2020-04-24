@extends('layouts.admin')
@section('content')
    <h1>
        <center>Edit Patient Record</center>
    </h1>


    {!! Form::model($user,['method'=>'PATCH','action'=>['AdminPsychiatristController@update',$user->id],'files'=>true]) !!}



    <img height=100 class="img logo rounded-sm mb-5"src="{{asset($user->photo ? $user->photo->path: 'https://placehold.it/400x400')}}"  class="img-responsive img-rounded"></br>

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

    <div class="form-group">
        {!! Form::submit('Submit',['class'=>'btn btn-primary col-sm-3']) !!}
    </div>
    {!! Form::close() !!}


@stop
