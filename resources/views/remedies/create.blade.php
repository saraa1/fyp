@extends('layouts.admin')
@section('content')

    <h3>Remedies for {{$questionaire->category->name}}</h3>
    {!! Form::open(['method'=>'POST','action'=>['RemediesController@store',$questionaire->id]]) !!}
    <input type="hidden" name="questionaire_id" value="{{$questionaire->id}}">

    <div class="form-group">
        {!! Form::label('name','Remedy') !!}
        {!! Form::textarea('name',null,['class'=>'form-control ','rows'=>3]) !!}
        @if ($errors->has('name'))
            <span class="text-danger">
                                        <strong>{{ $errors->first('name') }}</strong>
                            </span>
        @endif

    </div>

    <div class="form-group">
        {!! Form::submit('Create Remedy',['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

    <div class="card-header">
        Remedies
        <br><small>You can click on remedy to view full remedy</small>
    </div>
    <div class="card-body">
        @if(count($remedy)>0)
            <ul class="list-group">
                @foreach($remedy as $key=>$remedy)
                    <li class="list-group-item">
                        {{$key+1}}. <a href="{{route('remedy.show',$remedy->id)}}">{{$remedy->name}}</a>
                    </li>
                @endforeach
            </ul>
        @else
            <strong class="text-danger">No remedies found</strong>
        @endif


    </div>

@stop