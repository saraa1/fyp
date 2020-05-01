@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-header">
                    <legend>
                        <center><b>
                                {{$questionaire->category->name}}
                            </b></center>
                    </legend>
                </div>
                <div class="card-body text-dark form-inline">
                    {!! Form::open(['method'=>'GET','action'=>['QuestionController@create',$questionaire->id]]) !!}

                    <div class="form-group">
                        {!! Form::submit('Add Questions',['class'=>'btn btn-dark ']) !!}
                    </div>
                    {!! Form::close() !!}
                    {!! Form::open(['method'=>'GET','action'=>['SurveyController@show',$questionaire->id,\Illuminate\Support\Str::slug($questionaire->category->name)]]) !!}

                    <div class="form-group ml-2">
                        {!! Form::submit('Take Survey',['class'=>'btn btn-dark ']) !!}
                    </div>
                    {!! Form::close() !!}

                </div>
                @foreach($questionaire->question as $question )
                    <div class="card mt-4">
                        <div class="card-header text-dark"><b>Q: </b>{{$question->question}}</div>
                        <div class="card-body">
                            <ul class="list-group">
                                @foreach($question->answer as $answer)
                                    <li class="list-group-item">{{$answer->answer}}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="card-footer">

                    {!! Form::open(['method'=>'DELETE','action'=>['QuestionController@destroy',$questionaire->id,$question->id]]) !!}

                    <div class="form-group pull-right">
                        {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                    </div>
                    {!! Form::close() !!}
                        </div>
                    </div>
                @endforeach





            </div>

        </div>

    </div>

@stop