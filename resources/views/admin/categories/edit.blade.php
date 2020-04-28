@extends('layouts.admin')
@section('content')



    {!! Form::model($category,['method'=>'PATCH','action'=>['AdminCategoryController@update',$category->id]]) !!}

    <div class="form-group">
        {!! Form::label('name','Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description','Description:') !!}
        {!! Form::textarea('description',null,['class'=>'form-control','rows'=>3]) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update Category',['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

@stop