@extends('layouts.admin')
@section('content')


<div class="container">

    <h2>
        <center>Questionaire</center>
    </h2>
    <br>
    <p><b>Please fill the following questionaire so that we can calculate the performance of your child. </b></p>

    {{--    {!! Form::open(['method'=>'POST','action'=>'AdminUserController@store']) !!}--}}


    @foreach($ques as $ques)


        <div class="card bg-light text-dark">
            <div class="card-body">
                <b>Question: </b>{{$ques->body}}
            </div>


            <div class="form-group form-inline card-body">
                <b> {!! Form::label('answer','Answer:') !!}</b> &nbsp

                {!! Form::radio('answer','y',['class'=>'form-control']) !!} &nbsp Yes &nbsp

                {!! Form::radio('answer','n',['class'=>'form-control']) !!} &nbsp No &nbsp

                {!! Form::radio('answer','s',['class'=>'form-control']) !!} &nbsp Sometime &nbsp
            </div>
        </div>
        <br>


    @endforeach


    <div class="form-group form-inline" style="padding-left: 48rem">
        <div >

            {!! Form::open(['method'=>'','action'=>'QuestionaireController@index']) !!}

            {!! Form::submit('Back',['class'=>'btn btn-dark']) !!}
        </div>
        <div style="padding-left: 0.5rem">
            {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
        </div>



        {!! Form::close() !!}
    </div>
</div>



@stop