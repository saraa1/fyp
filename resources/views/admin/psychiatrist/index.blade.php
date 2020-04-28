@extends('layouts.admin')


@section('content')

    @if(count($psych)>0)
        <h1>
            Psychiatrist's Record
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
            @foreach($psych as $psych)
                <tbody>
                <tr>
                    <td>{{$psych->id}}</td>
                    <td>{{$psych->name}}</td>
                    <td>{{$psych->email}}</td>
                    <td>{{$psych->role ? $psych->role->name : 'no role'}}</td>
                    <td>{{$psych->is_active==1 ? 'Active' :'Not Active' }}</td>
                    <td>{{$psych->created_at ? $psych->created_at->diffForHumans() : "no date"}}</td>
                    <td>{{$psych->updated_at ? $psych->updated_at->diffForHumans() : "no date"}}</td>
                    <td>
                    <td>
                        <button class="btn btn-info" >
                            <a href="{{route('admin.psychiatrist.edit',$psych->id)}}" style="color: white">
                                Edit
                            </a>
                        </button>
                    </td>
                    </td>
                    <td>
                        {!! Form::open(['method'=>'DELETE','action'=>['AdminPatientController@destroy',$psych->id]]) !!}

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
            No Psychiatrist Record Found
        </h1>
    @endif
@stop