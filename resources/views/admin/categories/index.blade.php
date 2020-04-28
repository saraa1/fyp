@extends('layouts.admin')
@section('content')


    <h1 style="padding-left: 8rem; padding-bottom: 2rem ">Intellactual Disabilities</h1>

    ​
    @foreach($categories as $category)

        <div class="form-inline">
            <div class="cardd">

                <div class="container">

                    <h4>
                        <small>{{$category->id}}.</small>
                        <b><a href="{{route('admin.category.show',$category->id)}}">{{$category->name}}</a></b></h4>
                    <p>{{$category->description}}</p>


                </div>

            </div>
        </div>

        ​

    @endforeach
@stop