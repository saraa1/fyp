@extends('layouts.admin')
@section('content')


{!! Form::open(['method'=>'POST','action'=>'QuestionaireController@store']) !!}

<div class="form-group">
    {!! Form::label('category_id','Title:') !!}
    {!! Form::select('category_id',[''=>'Select one']+$category,null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('body','Body') !!}
    {!! Form::textarea('body',null,['class'=>'form-control ','rows'=>3]) !!}
</div>



<div class="form-group">
    {!! Form::submit('Add Questions',['class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!}
@stop