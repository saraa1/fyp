@extends('layouts.admin')
@section('content')

     <table class="table table-striped">
         <thead>
           <tr>
             <th>Firstname</th>
             <th>Lastname</th>
             <th>Email</th>
           </tr>
         </thead>
         @foreach($response as $response)
         <tbody>
           <tr>
             <td>{{$response->id}}</td>
             <td>{{$response->survey_id}}</td>
             <td>{{$response->question_id}}</td>
           </tr>

         </tbody>
         @endforeach
       </table>
@stop
