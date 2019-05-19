@extends('layouts.app')

@section('content')
    <div class="container">
        <td>
            <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Sort by <span class="caret"></span></button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{url('/details')}}">Category Name</a></li>
                    <li><a href="{{url('/price')}}">Price(Ascending)</a></li>
                    <li><a href="{{url('/price_desc')}}">Price(Descending)</a></li>
                </ul>
            </div>
        </td>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Posted By</th>
                <th scope="col">Category</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Contact No.</th>
                <th scope="col">Descripton</th>

            </tr>
            </thead>
            <tbody>
            @foreach($post_details as $post)

                <tr>
                    <td>{{$post->name}}</td>
                    <td>{{$post->cat_name}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->price}}</td>
                    <td>{{$post->phone_no}}</td>
                    <td>{{$post->description}}</td>
                    {{--                    <td><a href="{{url('/edit')}}">Edit</a></td>--}}
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
