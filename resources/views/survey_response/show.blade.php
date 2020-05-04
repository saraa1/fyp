@extends('layouts.admin')
@section('content')

    @if($percentage>=70)

        <h2>Your calculated result is <b>Poor</b>. So you need following remedies to follow.</h2>
        {{--        <div class="card">--}}
        {{--            {!! Form::select('name',collect($data), null, ['class' => 'form-control']) !!}--}}
        {{--        </div>--}}
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Remedy</th>
            </tr>
            </thead>
            @foreach($data as $d)
                <tbody>
                <tr>
                    <td>{{$d->name}}</td>

                </tr>

                </tbody>
            @endforeach
        </table>

        {!! Form::open(['method'=>'GET','action'=>['SurveyResponseController@pdf',$id,$percentage]]) !!}


        <div class="form-group">
            {!! Form::submit('Generate Report',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}


    @elseif($percentage<70 && $percentage>=50)

        <h2>Your calculated result is <b>Average</b>. So you need few remedies to follow.</h2>
        {{--        <div class="card">--}}
        {{--            {!! Form::select('name',collect($data), null, ['class' => 'form-control']) !!}--}}
        {{--        </div>--}}
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Remedy</th>
            </tr>
            </thead>
            @foreach($data as $d)
                <tbody>
                <tr>
                    <td>{{$d->name}}</td>

                </tr>

                </tbody>
            @endforeach
        </table>

        {!! Form::open(['method'=>'GET','action'=>['SurveyResponseController@pdf',$id,$percentage]]) !!}


        <div class="form-group">
            {!! Form::submit('Generate Report',['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}

    @else

        <h2>Your calculated result is <b>Good</b>. So you do not need any remedies.</h2>

    @endif



@stop