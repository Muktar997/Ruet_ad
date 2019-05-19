@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{--<--<div class="card">--}}
                {{--<div class="card-header"><b><font size="10" color="blue"> What you want to post?</font></b></div>--}}
            <b><font size="10" color="blue"> What do you want ?</font></b>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                            {{--<div class="btn-group">--}}
                                {{--<button type="button" class="btn btn-primary">Job Circular</button>--}}
                                {{--<div class="btn-group">--}}
                                    {{--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">--}}
                                        {{--Sale<span class="caret"></span></button>--}}
                                    {{--<ul class="dropdown-menu" role="menu">--}}
                                        {{--<li><a href="#">House</a></li>--}}
                                        {{--<li><a href="#">Lands</a></li>--}}
                                        {{--<li><a href="#">Bi-cycle</a></li>--}}
                                        {{--<li><a href="#">Ticket</a></li>--}}
                                        {{--<li><a href="#">Electronic Device</a></li>--}}
                                        {{--<li><a href="#">Books</a></li>--}}
                                        {{--<li><a href="#">Others</a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                                {{--<div class="btn-group">--}}
                                    {{--<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">--}}
                                        {{--Purchase<span class="caret"></span></button>--}}
                                    {{--<ul class="dropdown-menu" role="menu">--}}
                                        {{--<li><a href="#">House</a></li>--}}
                                        {{--<li><a href="#">Lands</a></li>--}}
                                        {{--<li><a href="#">Bi-cycle</a></li>--}}
                                        {{--<li><a href="#">Ticket</a></li>--}}
                                        {{--<li><a href="#">Electronic Device</a></li>--}}
                                        {{--<li><a href="#">Books</a></li>--}}
                                        {{--<li><a href="#">Others</a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        <div class="links">
                            <a href="{{url('/home/post')}}">
                                <button type="details" class="btn btn-success">
                                    <font size="6">Write a Post</font></button>
                                </button></a>
                            <a href="{{url('/details')}}">
                                <button type="details" class="btn btn-success">
                                    <font size="6">View Posts</font>
                                </button></a>
                        </div>
                {{--</div>--}}
            </div>
        </div>
    </div>
    <marquee direction="left" onmouseover="this.stop();" onmouseout="this.start();">
        <b><font size="4" color="red">Buy and sell goods in RUET</font></b>
    </marquee>
</div>
@endsection
