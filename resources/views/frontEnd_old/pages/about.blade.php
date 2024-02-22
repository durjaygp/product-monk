@extends('frontEnd.master')
@section('title')
    About Me
@endsection
@section('content')
    <div class="content-wrap p-0 overflow-visible">
        <div class="container mw-lg">
            <div class="row gutter-50 justify-content-center py-5">
                <div class="col-md-5">
                    <div class="min-vh-75 sticky-top z-1" style="background: url('{{asset($about->image)}}') no-repeat center center / cover; top: 150px"></div>
                </div>
                <div class="col-md-5 offset-lg-1">
                    <h5 class="font-body ls-2 text-uppercase op-06 mb-2">Hello</h5>
                    <h2 class="display-4 fw-normal text-transform-none ls-0 font-primary">I'm <span><strong>{{$about->title}}</strong></span></h2>
                    <p class="text-muted">{{$about->header}}</p>

                    <div class="line border-width-5 w-25 my-5"></div>

                    <p class="lead">{{$about->description}}</p>
                    <div class="clear"></div>

                    <div class="mt-3">
                        @php
                            $social = \App\Models\Social::latest()->get();
                        @endphp
                        @foreach($social as $row)
                            <a href="{{$row->link}}" class="social-icon ms-1 si-small rounded-circle text-light border-0 bg-x-twitter" title="Twitter" target="_blank">
                                <i class="{{$row->icon}}"></i>
                                <i class="{{$row->icon}}"></i>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="line"></div>

            <div class="heading-block mt-5 mb-3 border-bottom-0">
                <h2 class="fw-normal ls-0 text-transform-none mb-0">My Latest Blogs</h2>
            </div>
            <div class="row mb-4">
                @php
                    $latestblogs = \App\Models\Blog::whereStatus(1)->take(20)->latest()->get();
                @endphp
                @foreach($latestblogs as $row)
                    <div class="col-md-2">
                        <a href="{{route('home.blog',$row->slug)}}"><img src="{{$row->image}}" alt="{{$row->name}}"></a>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="clear"></div>
    </div>
@endsection
