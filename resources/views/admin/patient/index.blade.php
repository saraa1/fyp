@extends('layouts.admin')
@section('picture')
    <a href="#" class="img logo rounded-circle mb-5" style="background-image: url({{asset('/images/logo.jpg')}});"></a>

@stop
@section('content')

@if(count($patients)>0)
    <h1>
        Patient's Record
    </h1>

     <table class="table table-striped">
         <thead>
           <tr>
             <th>Id</th>
             <th>Name</th>
             <th>Email</th>
               <th>Created_at</th>
               <th>Updated_at</th>
           </tr>
         </thead>
         @foreach($patients as $patient)
         <tbody>
           <tr>
             <td>{{$patient->id}}</td>
             <td>{{$patient->name}}</td>
             <td>{{$patient->email}}</td>
               <td>{{$patient->created_at ? $patient->created_at->diffForHumans() : "no date"}}</td>
               <td>{{$patient->updated_at ? $patient->updated_at->diffForHumans() : "no date"}}</td>
           </tr>
         @endforeach

         </tbody>
       </table>
    @else
    <h1>
        No Patient Record Found
    </h1>
    @endif
@stop