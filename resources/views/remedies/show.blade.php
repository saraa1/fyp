@extends('layouts.admin')
@section('content')
    <div class="card">

        <div class="card-body ">
            {!! Form::model($remedy,['method'=>'PATCH','action'=>['RemediesController@update',$remedy->id]]) !!}

           <div class="form-group">
               {!! Form::textarea('name',$remedy->name,null,['class'=>'form-control','rows'=>2]) !!}
               {!! Form::hidden('questionaire_id',$remedy->questionaire_id,null) !!}
{{--               <input type="hidden" name="questionaire_id "value="{{$remedy->questionaire_id}}">--}}

           </div>


        </div>
        <div class="card-footer form-inline">
            <div class="form-group">
                {!! Form::submit('Update',['class'=>'btn btn-info']) !!}
            </div>
            {!! Form::close() !!}


            {!! Form::open(['method'=>'DELETE','action'=>['RemediesController@destroy',$remedy->id]]) !!}
            <div class="form-group ml-2">
                {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
            </div>
            {!! Form::close() !!}
        </div>

    </div>
@stop