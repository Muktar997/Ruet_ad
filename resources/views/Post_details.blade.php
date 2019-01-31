@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
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
                    <td>{{$post->cat_name}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->price}}</td>
                    <td>{{$post->phone_no}}</td>
                    <td>{{$post->description}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
