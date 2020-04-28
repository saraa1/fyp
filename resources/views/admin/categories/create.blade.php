@extends('layouts.admin')
@section('content')



{!! Form::open(['method'=>'POST','action'=>'AdminCategoryController@store']) !!}

<div class="form-group">
    {!! Form::label('name','Name:') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description','Description:') !!}
    {!! Form::textarea('description',null,['class'=>'form-control','rows'=>3]) !!}
</div>
<div class="form-group">
    {!! Form::submit('Add Category',['class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!}

@stop