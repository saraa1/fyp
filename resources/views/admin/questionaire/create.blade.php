@extends('layouts.admin')
@section('content')


    {!! Form::open(['method'=>'POST','action'=>'AdminQuestionaireController@store']) !!}

    <div class="form-group">
        {!! Form::label('category_id','Title:') !!}
        {!! Form::select('category_id',[''=>'Select one']+$category,null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body','Description') !!}
        {!! Form::textarea('body',null,['class'=>'form-control ','rows'=>3]) !!}
    </div>



    <div class="form-group">
        {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop