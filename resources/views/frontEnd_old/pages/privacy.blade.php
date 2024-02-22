@extends('frontEnd.master')
@section('title')
    {{$privacy->page_title}}
@endsection
@section('content')
    <div class="content-wrap p-0 overflow-visible">
        <div class="container mw-lg">
            <div class="row gutter-50 justify-content-center py-5">
                <div class="col-md-5">
                    <div class="min-vh-75 sticky-top z-1" style="background: url('{{asset($privacy->image)}}') no-repeat center center / cover; top: 150px"></div>
                </div>
                <div class="col-md-5 offset-lg-1">


                    <p class="text-muted">{{$privacy->page_title}}</p>

                    <div class="line border-width-5 w-25 my-5"></div>

                    <p class="lead">{{$privacy->description}}</p>
                    <div class="clear"></div>
                </div>
            </div>

            <div class="line"></div>

            <div class="heading-block mt-5 mb-3 border-bottom-0">
                <h2 class="fw-normal ls-0 text-transform-none mb-0">More Information</h2>
                <p>{!! $privacy->content !!}</p>
            </div>

        </div>

        <div class="clear"></div>
    </div>
@endsection
