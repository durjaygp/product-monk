@extends('frontEnd.master')
@section('title')
    {{$category->name}}
@endsection
@section('content')
    <section class="page-title page-title-center">
        <div class="container">
            <div class="page-title-row">
                <div class="page-title-content mw-sm">
                    <h1>{{$category->name}}</h1>
                    <span>{{$category->description}}</span>
                </div>
            </div>
        </div>
    </section>

    <section id="content">
        <div class="content-wrap pt-0 pt-sm-6">
            <div class="container">

                <div class="row gutter-50">
                    <div class="col-lg-3 cat-widgets position-sticky h-100" style="top: 234px;">
                        <div class="widget widget-search">
                            <form class="input-group" method="get" action="{{route('search.blog')}}">
                                @csrf
                                <input class="form-control" type="search" name="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-secondary uil uil-search" type="submit"></button>
                            </form>
                        </div>
                        <div class="widget widget-nav mt-md-5">
                            <ul class="nav">
                                @php
                                    $cate= \App\Models\Category::latest()->get();
                                @endphp
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">All Categories</a>
                                </li>
                                @foreach($cate as $row)
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('home.category', $row->slug) }}">{{$row->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <h3>All {{$category->name}} Posts</h3>
                            </div>
                            <div>

                                <div class="btn-group">

                                </div>
                            </div>
                        </div>
                        @php
                            $blog = \App\Models\Blog::where('category_id',$category->id)->whereStatus(1)->get();
                        @endphp
                        <div class="row col-mb-50 posts-md">
                            @foreach($blog as $row)
                                <div class="col-md-4">
                                    <article class="entry">
                                        <div class="entry-image mb-3">
                                            <a href="{{route('home.blog',$row->slug)}}"><img src="{{asset($row->image)}}" alt="{{$row->name}}"></a>
                                        </div>
                                        <div class="entry-title title-sm">
                                            <div class="entry-categories"><a href="{{ route('home.category', $row->category->slug) }}">{{$row->category->name}}</a></div>
                                            <h3><a href="{{route('home.blog',$row->slug)}}" class="color-underline stretched-link">{{$row->name}}</a></h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $row->created_at)->format('M d, Y h:i A')}}</li>
                                            </ul>
                                        </div>
                                        <div class="entry-content mt-3">
                                            <p>{{$row->description}}</p>
                                            <a href="{{route('home.blog',$row->slug)}}" class="more-link">Read the artcile</a>
                                        </div>
                                    </article>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>


                <!-- Subscribe Section============================================= -->
                <div class="section section-colored rounded px-4">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-5">
                            <h3 class="mb-4 mb-lg-0">Sign up for Updates &amp; Newsletters.</h3>
                        </div>
                        <div class="col-lg-6">
                            <div class="widget">


                                <form action="{{route('newsletters.store')}}" method="post" class="mb-0 d-flex">
                                    @csrf
                                    <input type="email"  name="email" class="form-control form-control-lg not-dark required email" placeholder="Your Email Address" required>
                                    <input type="submit" value="Subscribe Now" class="button button-large button-black">
                                    {{--                                <button  class="button button-large button-black button-dark fw-medium ls-0 button-rounded m-0 ms-3" type="submit">Subscribe Now</button>--}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- Subscribe Section End -->

            </div>
        </div>
    </section>

@endsection
