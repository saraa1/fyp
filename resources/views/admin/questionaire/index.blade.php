@extends('layouts.admin')
@section('content')


    <h1 style="padding-left: 8rem; padding-bottom: 2rem ">All Questionaires</h1>
    ​
    @foreach($questionaire as $questionair)

        <div>
            <div class="cardd">

                <div class="container">

                    <h4>
                        <small>{{$questionair->id}}.</small>

                        <b><a href="{{route('admin.questionaire.show',$questionair->id)}}">{{$questionair->category->name}}</a></b>
                    </h4>
                    <p>{{$questionair->body}}</p>
                 <div class="card-body">
                        {!! Form::open(['method'=>'GET','action'=>['QuestionController@create',$questionair->id]]) !!}

                        <div class="form-group">
                            {!! Form::submit('Add Questions',['class'=>'btn btn-dark ']) !!}
                        </div>
                        {!! Form::close() !!}

                    </div>

                </div>

            </div>
        </div>

        ​

    @endforeach
@stop
