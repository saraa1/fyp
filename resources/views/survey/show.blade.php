@extends('layouts.admin')
@section('content')
   <html>
   <head>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>

   </head>
   <body>
   {!! Form::open(['method'=>'POST','action'=>['SurveyController@store',$questionaire->id,\Illuminate\Support\Str::slug($slug)]]) !!}


   <div class="container">
       <div class="row justify-content-center">
           <div class="col-md-8">
               <div class="card">
                   <div class="card-header">
                       <legend>
                           <center><b>
                                   {{$slug}}
                               </b></center>
                       </legend>
                   </div>


                   @foreach($questionaire->question as $key=>$question )
                       <div class="card mt-4">
                           <div class="card-header text-dark">
                               <strong>Q{{$key+1 }}: </strong>{{$question->question}}</div>
                           <div class="card-body">
                               {{--                                @error('responses.'.$key.'.answer_id')--}}
                               {{--                                <small class="text-danger">the field is required</small>--}}
                               {{--                                @enderror--}}
                               {{--                                @if ($errors->has('responses.'.$key.'.answer_id'))--}}
                               {{--                                    <span class="help-block">--}}
                               {{--                                        <strong>{{ $errors->first('responses.'.$key.'.answer_id') }}</strong>--}}
                               {{--                                    </span>--}}
                               {{--                                @endif--}}

                               <ul class="list-group">
                                   @foreach($question->answer as $key=>$answer)
                                       <label for='{{$key}}'>
                                           <li class="list-group-item" style="width: 500px">
                                               <div>

                                                   <input  type="checkbox" value="{{$answer->id}}" name="answer[]">
                                                   {{(old('answer[]')==$answer->id ? 'checked' : '')}}
                                                   {{$answer->answer}}

                                               </div>
                                           </li>
                                           @endforeach
                                       </label>
                               </ul>
                           </div>
                       </div>
                   @endforeach

                   <input type="hidden" name="survey[email]" value="{{$user->email}}">
                   <input type="hidden" name="survey[name]" value="{{$user->name}}">
                   <div class="form-group ">
                       {!! Form::submit('Submit',['class'=>'btn btn-dark pull-right mt-2 mr-2']) !!}
                   </div>

               </div>
           </div>
       </div>

   </div>

   {!! Form::close() !!}
   <script type="text/javascript">
       $('.answer-list').on('change', function() {
           $('.answer-list').not(this).prop('checked', false);
       });
   </script>



   </body>
   </html>

@stop