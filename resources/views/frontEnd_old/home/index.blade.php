@extends('frontEnd.master')
@section('title')
    {{$website->name}}
@endsection
@section('content')
    <div class="content-wrap pt-5" style="overflow: visible;">
        <div class="container">
            <!-- Hero Area============================================= -->
            @php
                $blogs = \App\Models\Blog::latest()->whereStatus(1)->where('position',1)->take(5)->get();
            @endphp
            <div class="row border-between">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <!-- Post Article -->
                    @if($blogs->isNotEmpty())
                        @php
                            $featuredPost = $blogs->shift(); // Get the first post as featured
                        @endphp
                    <article class="entry border-bottom-0 mb-0">
                        <div class="entry-image">
                            <a href="{{route('home.blog',$featuredPost->slug)}}"><img src="{{asset($featuredPost->image)}}" alt="{{$featuredPost->name}}"></a>
                        </div>
                        <div class="entry-title">
                            <div class="entry-categories"><a href="{{ route('home.category', $featuredPost->category->slug) }}">{{$featuredPost->category->name}}</a></div>
                            <h3><a href="{{route('home.blog',$featuredPost->slug)}}" class="stretched-link color-underline"><span>{{$featuredPost->name}}</span></a></h3>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><a href="{{route('home.blog',$featuredPost->slug)}}">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $featuredPost->created_at)->format('M d, Y h:i A')}} ,
                                        @if($featuredPost->peoples)
                                            {{$featuredPost->peoples}} Persons ,
                                        @endif
                                        @if($featuredPost->duration)
                                            Cooking Time: {{$featuredPost->duration}} Minutes,
                                        @endif
                                        @if($featuredPost->ingredients)
                                            Total Ingredients: {{$featuredPost->ingredients}}
                                        @endif
                                    </a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>{{$featuredPost->description}}.</p>
                        </div>
                    </article>
                    @endif
                </div>

                <div class="col-lg-5">
                    <h3 class="font-body fw-medium mb-4 h4">Highlights</h3>

                    <div class="row posts-md col-mb-30">
                        @foreach($blogs as $post)
                        <article class="entry col-12">
                            <div class="grid-inner row gutter-20">
                                <div class="col-md-4">
                                    <a class="entry-image" href="{{route('home.blog',$post->slug)}}"><img src="{{asset($post->image)}}" alt="{{$post->name}}"></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="entry-title title-xs">
                                        <div class="entry-categories"><a href="{{ route('home.category', $post->category->slug) }}">{{$post->category->name}}</a></div>
                                        <h3><a href="{{route('home.blog',$post->slug)}}" class="stretched-link color-underline">{{$post->name}}</a></h3>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="#">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->format('M d, Y h:i A')}}
                                                    @if($post->peoples)
                                                        {{$post->peoples}} Persons ,
                                                    @endif
                                                    @if($post->duration)
                                                        Cooking Time: {{$post->duration}} Minutes,
                                                    @endif
                                                    @if($post->ingredients)
                                                        Total Ingredients: {{$post->ingredients}}
                                                    @endif
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endforeach
                    </div>

                </div>
            </div> <!-- Hero Area End -->

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

            <!-- Video Section ============================================= -->
            @php
                $recipes = \App\Models\Blog::whereStatus(1)->latest()->where('type','recipe')->take(3)->get();
            @endphp
            <div class="d-flex justify-content-between mb-4">
                <h3 class="font-body fw-medium m-0">Latest Recipes</h3>
                <a href="#" class="btn btn-sm btn-outline-secondary">More Content <i class="bi-arrow-right"></i></a>
            </div>

            <div class="row posts-md col-mb-30">
                @foreach($recipes as $row)
                    <div class="col-md-4">
                        <article class="entry border-bottom-0 mb-0">
                            <div class="entry-image">
                                <a href="{{route('home.blog',$row->slug)}}" data-lightbox="iframe"><img src="{{asset($row->image)}}" alt="{{$row->name}}">

                                </a>
                            </div>
                            <div class="entry-title title-sm">
                                <div class="entry-categories"><a href="{{ route('home.category', $row->category->slug) }}">{{$row->category->name}}</a></div>
                                <h3><a href="{{route('home.blog',$row->slug)}}" class="color-underline">{{$row->name}}</a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><a href="{{route('home.blog',$row->slug)}}">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $row->created_at)->format('M d, Y h:i A')}}</a></li>
                                </ul>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>  <!-- Video Section End -->

        </div>
        <!-- Dark Section Spotlight  -->
        <div class="section dark">
            <div class="container">
                @php
                    $spotlights = \App\Models\Blog::where('position',3)->take(4)->get();
                @endphp
                <h2 class="font-body fw-medium">Spotlights</h2>
                <div class="row border-between">
                    @if($spotlights->isNotEmpty())
                        @php
                            $spot = $spotlights->shift(); // Get the first post as featured
                        @endphp
                    <div class="col-lg-7 mb-5 mb-lg-0">
                        <!-- Post Article -->
                        <article class="entry border-bottom-0 mb-0">
                            <div class="entry-image">
                                <a href="{{route('home.blog',$spot->slug)}}"><img src="{{asset($spot->image)}}" alt="{{$spot->name}}"></a>
                            </div>
                            <div class="entry-title">
                                <div class="entry-categories"><a href="{{ route('home.category', $spot->category->slug) }}">{{$spot->category->name}}</a></div>
                                <h3><a href="{{route('home.blog',$spot->slug)}}" class="stretched-link color-underline"><span>{{$spot->name}}</span></a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><a href="{{route('home.blog',$spot->slug)}}">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $spot->created_at)->format('M d, Y h:i A')}} ,
                                            @if($spot->peoples)
                                                {{$spot->peoples}} Persons ,
                                            @endif
                                            @if($spot->duration)
                                                Cooking Time: {{$spot->duration}} Minutes,
                                            @endif
                                            @if($spot->ingredients)
                                                Total Ingredients: {{$spot->ingredients}}
                                            @endif
                                        </a></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <p>{{$spot->description}}.</p>
                            </div>
                        </article>
                    </div>
                    @endif
                    <div class="col-lg-5">
                        <h3 class="font-body fw-medium mb-4 h4">Highlights</h3>

                        <div class="row posts-md col-mb-30">

                            @foreach($spotlights as $row)
                                <article class="entry col-12">
                                    <div class="grid-inner row gutter-20">
                                        <div class="col-md-4">
                                            <a class="entry-image" href="{{route('home.blog',$row->slug)}}"><img src="{{asset($row->image)}}" alt="{{$row->name}}"></a>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="entry-title title-xs">
                                                <div class="entry-categories"><a href="{{ route('home.category', $row->category->slug) }}">{{$row->category->name}}</a></div>
                                                <h3><a href="{{route('home.blog',$row->slug)}}" class="stretched-link color-underline">{{$row->name}}</a></h3>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li><a href="#">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $row->created_at)->format('M d, Y h:i A')}}
                                                            @if($row->peoples)
                                                                {{$row->peoples}} Persons ,
                                                            @endif
                                                            @if($row->duration)
                                                                Cooking Time: {{$row->duration}} Minutes,
                                                            @endif
                                                            @if($row->ingredients)
                                                                Total Ingredients: {{$row->ingredients}}
                                                            @endif
                                                        </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </div> <!-- Dark Section Spotlight End -->
        @php
            $blogs = \App\Models\Blog::latest()->whereStatus(1)->where('position',4)->take(5)->get();
        @endphp
        <div class="container">
            <h2 class="font-body fw-medium">Travel</h2>

            <div class="row border-between">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <!-- Post Article -->
                    @if($blogs->isNotEmpty())
                        @php
                            $featuredPost = $blogs->shift(); // Get the first post as featured
                        @endphp
                        <article class="entry border-bottom-0 mb-0">
                            <div class="entry-image">
                                <a href="{{route('home.blog',$featuredPost->slug)}}"><img src="{{asset($featuredPost->image)}}" alt="{{$featuredPost->name}}"></a>
                            </div>
                            <div class="entry-title">
                                <div class="entry-categories"><a href="{{ route('home.category', $featuredPost->category->slug) }}">{{$featuredPost->category->name}}</a></div>
                                <h3><a href="{{route('home.blog',$featuredPost->slug)}}" class="stretched-link color-underline"><span>{{$featuredPost->name}}</span></a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><a href="{{route('home.blog',$featuredPost->slug)}}">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $featuredPost->created_at)->format('M d, Y h:i A')}} ,
                                            @if($featuredPost->peoples)
                                                {{$featuredPost->peoples}} Persons ,
                                            @endif
                                            @if($featuredPost->duration)
                                                Cooking Time: {{$featuredPost->duration}} Minutes,
                                            @endif
                                            @if($featuredPost->ingredients)
                                                Total Ingredients: {{$featuredPost->ingredients}}
                                            @endif
                                        </a></li>
                                </ul>
                            </div>
                            <div class="entry-content">
                                <p>{{$featuredPost->description}}.</p>
                            </div>
                        </article>
                    @endif
                </div>

                <div class="col-lg-5">
                    <h3 class="font-body fw-medium mb-4 h4">Highlights</h3>

                    <div class="row posts-md col-mb-30">
                        @foreach($blogs as $post)
                            <article class="entry col-12">
                                <div class="grid-inner row gutter-20">
                                    <div class="col-md-4">
                                        <a class="entry-image" href="{{route('home.blog',$post->slug)}}"><img src="{{asset($post->image)}}" alt="{{$post->name}}"></a>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="entry-title title-xs">
                                            <div class="entry-categories"><a href="{{ route('home.category', $post->category->slug) }}">{{$post->category->name}}</a></div>
                                            <h3><a href="{{route('home.blog',$post->slug)}}" class="stretched-link color-underline">{{$post->name}}</a></h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><a href="#">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->format('M d, Y h:i A')}}
                                                        @if($post->peoples)
                                                            {{$post->peoples}} Persons ,
                                                        @endif
                                                        @if($post->duration)
                                                            Cooking Time: {{$post->duration}} Minutes,
                                                        @endif
                                                        @if($post->ingredients)
                                                            Total Ingredients: {{$post->ingredients}}
                                                        @endif
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>

                </div>
            </div> <!-- Hero Area End -->
        </div>


        <div class="container mt-5">

            <!-- Based On Your Reading History============================================= -->
            <div class="row border-between">
                <!-- Left Side of Based On Your Reading History
                ============================================= -->
                <div class="col-lg-8">
                    <h3 class="font-body fw-medium">Latest Blog</h3>

                    <div class="row col-mb-50">
                        @php
                            $latestblogs = \App\Models\Blog::whereStatus(1)->take(10)->latest()->get();
                        @endphp
                        @foreach($latestblogs as $row)
                            <article class="col-12">
                                <div class="row">
                                    <div class="col-md-6 mb-0">
                                        <a href="{{route('home.blog',$row->slug)}}" class="entry-image">
                                            <img src="{{asset($row->image)}}" alt="{{$row->name}}">
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="entry-title mt-lg-0 mt-3">
                                            <div class="entry-categories"><a href="{{ route('home.category', $row->category->slug) }}">{{$row->category->name}}</a></div>
                                            <h3><a href="{{route('home.blog',$row->slug)}}" class="color-underline stretched-link">{{$row->name}}</a></h3>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><a href="{{route('home.blog',$row->slug)}}">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $row->created_at)->format('M d, Y h:i A')}}</a></li>
                                            </ul>
                                        </div>
                                        <div class="entry-content">
                                            <p>{{$row->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>

                <!-- Right Side of Based On Your Reading History - Sticky
                ============================================= -->
                <div class="col-lg-4 mt-5 mt-lg-0 position-sticky h-100" style="top: 234px;">
                    <h3 class="font-body fw-medium">This Week</h3>

                    <ul class="week-posts posts-sm row col-mb-30">
                        @php
                            $week = \App\Models\Blog::whereStatus(1)->orderBy('created_at', 'asc')->take(7)->get();
                        @endphp
                        @foreach($week as $row)
                            <li class="entry col-12">
                                <div class="grid-inner">
                                    <div class="entry-title">
                                        <h4><a href="{{route('home.blog',$row->slug)}}" class="color-underline stretched-link">{{$row->name}}</a></h4>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><a href="{{route('home.blog',$row->slug)}}">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $row->created_at)->format('M d, Y h:i A')}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        @endforeach


                    </ul>

                    <div class="line line-sm"></div>

{{--                    <h3 class="font-body fw-medium">Ad</h3>--}}
{{--                    <div class="fb-post" data-href="https://www.facebook.com/semicolonweb/posts/2855299871172671" data-width="500" data-show-text="false"></div>--}}

                </div>
            </div> <!-- Based On Your Reading History End -->
        </div>
        <!-- Advertisement Section============================================= -->

    </div>
@endsection
