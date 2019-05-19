@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><part><b><font size="3" color="red"> Enter Information</font></b></part></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action={{url('/edit/'.$post->id)}}>
                            {{csrf_field()}}

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><b><font size="3" color="blue"> Title</font></b></label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="text" class="form-control" name="title" required value="{{$post->title}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><b><font size="3" color="blue"> Category Name</font></b></label>

                                <div class="col-md-6">
                                    {{ Form::select('cat_id',  $categories, null, ['class'=>'form-control','value'=>'$post->cat_id']) }}
                                </div>

{{--                                <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="text" class="form-control" name="cat_id" required>--}}
{{--                                </div>--}}
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right"><b><font size="3" color="blue"> Price</font></b></label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class= "form-control" name="price" value="{{$post->price}}" required>


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right"><b><font size="3" color="blue"> Phone Number</font></b></label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class= "form-control" name="phone_no" value="{{ $post->phone_no }}" required>


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right"><b><font size="3" color="blue"> Description</font></b></label>

                                <div class="col-md-6">
                                    <input id="password" type="text" class="form-control" name="description" value="{{ $post->description }}" required>

                                </div>
                            </div>




                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
