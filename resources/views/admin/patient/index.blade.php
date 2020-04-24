@extends('layouts.admin')
@section('picture')

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
               <th>Role</th>
               <th>
                   Status
               </th>
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
               <td>{{$patient->role ? $patient->role->name : 'no role'}}</td>
               <td>{{$patient->is_active==1 ? 'Active' :'Not Active' }}</td>

               <td>{{$patient->created_at ? $patient->created_at->diffForHumans() : "no date"}}</td>
               <td>{{$patient->updated_at ? $patient->updated_at->diffForHumans() : "no date"}}</td>
               <td>
               <td>
                   <button class="btn btn-info" >
                       <a href="{{route('admin.patient.edit',$patient->id)}}" style="color: white">
                       Edit
                   </a>
                   </button>
               </td>
               </td>
               <td>
                   {!! Form::open(['method'=>'DELETE','action'=>['AdminPatientController@destroy',$patient->id]]) !!}

                   <div class="form-group">
                       {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                   </div>
                   {!! Form::close() !!}
               </td>
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