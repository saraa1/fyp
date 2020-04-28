@extends('layouts.admin')
@section('content')


    <h1 style="padding-left: 8rem; padding-bottom: 2rem ">View Questionaire for every Disability</h1>
    ​
    @foreach($categories as $category)

        <div>
            <div class="cardd">

                <div class="container">

                    <h4>
                        <small>{{$category->id}}.</small>
                        <b><a href="{{route('admin.category.show',$category->id)}}">{{$category->name}}</a></b></h4>
                    <p>{{$category->description}}</p>

                    {!! Form::open(['method'=>'GET','action'=>['QuestionaireController@show',$category->id]]) !!}

                    <div class="form-group" style="padding-left: 45rem; padding-bottom: 1rem">
                        {!! Form::submit('View Questionaire',['class'=>'btn btn-primary ']) !!}
                    </div>
                    {!! Form::close() !!}



                </div>

            </div>
        </div>

        ​

    @endforeach
    @stop
