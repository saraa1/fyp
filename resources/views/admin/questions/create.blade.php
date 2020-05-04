@extends('layouts.admin')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-header">
                    <legend>
                        Create New Question
                    </legend>
                </div>
                <div class="card-body">


                    {!! Form::open(['method'=>'POST','action'=>['QuestionController@store',$questionaire->id]]) !!}

                    <div class="form-group">
                        {!! Form::label('question','Question:') !!}
                        {!! Form::text('question[question]',null,['class'=>'form-control', 'placeholder'=>'Enter Question']) !!}
                        @if ($errors->has('question.question'))
                            <span class="text-danger">
                                        <strong>{{ $errors->first('question.question') }}</strong>
                            </span>
                        @endif

                    </div>
                    <div class="form-group">
                        <fieldset>
                            Answers:

                            <div class="form-group">
                                {!! Form::label('answer1','1.') !!}
                                {!! Form::text('answers[][answer]',null,['class'=>'form-control', 'placeholder'=>'Enter Choice']) !!}
                                @if ($errors->has('answers.0.answer'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('answers.0.answer') }}</strong>
                            </span>
                                @endif
                            </div>
                            <div class="form-group">
                                {!! Form::label('answer2','2.') !!}
                                {!! Form::text('answers[][answer]',null,['class'=>'form-control', 'placeholder'=>'Enter Choice']) !!}
                                @if ($errors->has('answers.1.answer'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('answers.1.answer') }}</strong>
                            </span>
                                @endif
                            </div>



                        </fieldset>

                    </div>


                    <div class="form-group">
                        {!! Form::submit('Add Questions',['class'=>'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}

                </div>


            </div>

        </div>

    </div>

@stop