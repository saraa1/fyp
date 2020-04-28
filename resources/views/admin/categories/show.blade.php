@extends('layouts.admin')
@section('content')



<div class="card">


    <div class="container">

        <h4><small>{{$category->id}}. </small><b>{{$category->name}}</b><br/>
            <small>{{$category->created_at->diffForHumans()}}</small></h4>

        <p>{{$category->description}}</p>

    </div>

</div>
<div class="form-inline dim">
    {!! Form::open(['method'=>'GET','action'=>['AdminCategoryController@edit',$category->id]]) !!}

    <div class="form-group butn">
        {!! Form::submit('Update',['class'=>'btn btn-info ']) !!}
    </div>
    {!! Form::close() !!}


    {!! Form::open(['method'=>'DELETE','action'=>['AdminCategoryController@destroy',$category->id]]) !!}

    <div class="form-group butn">
        {!! Form::submit('Delete',['class'=>'btn btn-danger ']) !!}
    </div>
    {!! Form::close() !!}

</div>


​

​


@stop