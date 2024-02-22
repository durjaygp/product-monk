@extends('frontEnd.master')
@section('title')
    {{$blog->name}}
@endsection
@section('content')
    <div class="content-wrap pt-5" style="overflow: visible;">

        <div class="container">
            <!-- Single Page Content
            ============================================= -->
            <div class="single-post mb-0">

                <!-- Single Post
                ============================================= -->
                <div class="entry">

                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <!-- Entry Title
                            ============================================= -->
                            <div class="entry-title">
                                <div class="entry-categories"><a href="demo-blog-categories.html">{{$blog->category->name}}</a></div>
                                <h2>{{$blog->name}}</h2>
                            </div><!-- .entry-title end -->
                        </div>
                    </div>

                    <!-- Entry Meta
                    ============================================= -->
                    <div class="d-flex justify-content-center mt-2">
                        <div class="entry-meta">
                            <ul>
                                <li>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $blog->created_at)->format('M d, Y h:i A')}}</li>
                                <li>By <a href="#">{{$blog->user->name}}</a></li>
                            </ul>
                        </div>
                    </div><!-- .entry-meta end -->

                    <!-- Entry Image
                    ============================================= -->
                    <div class="entry-image mt-5">
                        <a href="" data-lightbox="image"><img class="img-fluid rounded" src="{{asset($blog->image)}}" alt="Blog Single"></a>


                    </div><!-- .entry-image end -->

                    <!-- Entry Content
                    ============================================= -->
                    <div class="entry-content">

                        <div class="row">

                            <div class="col-lg-2 media-content" data-animate="fadeIn">
                                <div class="entry-title text-start">
                                    <h4>All online Conferences to save your box, get Inspired and Stay Connected</h4>
                                </div>
                                <!-- Post Single - Share
                                ============================================= -->
                                <div>
                                    <h5 class="mb-2">Share this Post:</h5>
                                    <div>
                                        <!-- AddToAny BEGIN -->
                                        <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                            <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                            <a class="a2a_button_facebook"></a>
                                            <a class="a2a_button_mastodon"></a>
                                            <a class="a2a_button_email"></a>
                                            <a class="a2a_button_linkedin"></a>
                                            <a class="a2a_button_whatsapp"></a>
                                            <a class="a2a_button_pinterest"></a>
                                            <a class="a2a_button_telegram"></a>
                                            <a class="a2a_button_facebook_messenger"></a>
                                            <a class="a2a_button_google_gmail"></a>
                                            <a class="a2a_button_threads"></a>
                                            <a class="a2a_button_skype"></a>
                                            <a class="a2a_button_reddit"></a>
                                        </div>
                                        <script async src="https://static.addtoany.com/menu/page.js"></script>
                                        <!-- AddToAny END -->
                                    </div>
                                </div><!-- Post Single - Share End -->
                            </div>

                            <div class="col-lg-1"></div>

                            <div class="text-content col-lg-6">

                                <p>{{$blog->description}}</p><br>

                                    @if($blog->peoples)
                                      <p> {{$blog->peoples}} Persons ,</p>
                                @endif
                                    @if($blog->duration)
                                     <P>   Cooking Time: {{$blog->duration}} Minutes,</P>
                                    @endif
                                    @if($blog->ingredients)
                                       <P> Total Ingredients: {{$blog->ingredients}}</P>
                                    @endif



                                @if($blog->ingredients_content)
                                    <p>{!! $blog->ingredients_content !!}</p>
                                @endif


                                <p>{!! $blog->main_content !!}</p>

                                <div class="line"></div>

                                <!-- Tag Cloud
                                ============================================= -->
{{--                                <h4 class="mb-3">Related Tags</h4>--}}
{{--                                <div class="tagcloud">--}}
{{--                                    <a href="#">general</a>--}}
{{--                                    <a href="#">information</a>--}}
{{--                                    <a href="#">media</a>--}}
{{--                                    <a href="#">press</a>--}}
{{--                                    <a href="#">gallery</a>--}}
{{--                                    <a href="#">illustration</a>--}}
{{--                                </div><!-- .tagcloud end -->--}}

                                <div class="clear"></div>

                                <!-- Comments
                                ============================================= -->
                                <div id="comments">

                                    <h3 id="comments-title"><span>{{count($comments)}}</span> Comments</h3>

                                    <!-- Comments List
                                    ============================================= -->
                                    <ol class="commentlist">

                                        @foreach($comments as $com)
                                            <li class="comment even thread-even depth-1" id="li-comment-1">

                                                <div id="comment-1" class="comment-wrap">

                                                    <div class="comment-meta">

                                                        <div class="comment-author vcard">
																<span class="comment-avatar">
																<img alt='' src='https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60'
                                                                     class='avatar avatar-60 photo avatar-default' height='60' width='60'></span>

                                                        </div>

                                                    </div>

                                                    <div class="comment-content">

                                                        <div class="comment-author">{{$com->full_name}}<span><a href="#" title="Permalink to this comment">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $com->created_at)->format('M d, Y h:i A')}}</a></span></div>

                                                        <p>{{$com->comment}}</p>




                                                    </div>

                                                    <div class="clear"></div>

                                                </div>
                                            </li>
                                        @endforeach





                                    </ol><!-- .commentlist end -->

                                    <div class="clear"></div>

                                    <!-- Comment Form
                                    ============================================= -->
                                    <div id="respond">

                                        <h3>Leave a <span>Comment</span></h3>

                                        <form class="row mb-0" action="{{route('comment.save')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="blog_id" value="{{ $blog->id }}">

                                            <div class="form-group col-6">
                                                <label for="author">Name</label>
                                                <input type="text" name="full_name" id="author" size="22" tabindex="1" class="form-control">
                                            </div>

                                            <div class="form-group col-6">
                                                <label for="email">Email</label>
                                                <input type="text" name="email" id="email" size="22" tabindex="2" class="form-control">
                                            </div>

                                            <div class="w-100"></div>

                                            <div class="form-group col-12">
                                                <label for="comment">Comment</label>
                                                <textarea name="comment" cols="58" rows="7" tabindex="4" class="form-control"></textarea>
                                            </div>

                                            <div class="form-group col-12 mt-4 mb-0">
                                                <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-large button-black button-dark text-transform-none fw-medium ls-0 button-rounded m-0">Submit Comment</button>
                                            </div>

                                        </form>

                                    </div><!-- #respond end -->

                                </div><!-- #comments end -->
                            </div>
                            <!-- Post Single - Content End -->

                        </div>

                    </div>
                </div><!-- .entry end -->

                <h3 class="mb-0">More Posts</h3>

                <div class="row posts-md">
                    @php
                        $blogs = \App\Models\Blog::latest()->take(4)->get();
                    @endphp
                    @foreach($blogs as $row)
                    <div class="col-lg-3 col-sm-6">
                        <article class="entry">
                            <div class="entry-image">
                                <a href="{{route('home.blog',$row->slug)}}"><img src="{{asset($row->image)}}" alt="{{$row->name}}"></a>
                            </div>
                            <div class="entry-title title-sm text-start">
                                <div class="entry-categories"><a href="{{ route('home.category', $row->category->slug) }}">{{$row->category->name}}</a></div>
                                <h3><a href="{{route('home.blog',$row->slug)}}" class="color-underline stretched-link">{{$row->name}}</a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><a href="{{route('home.blog',$row->slug)}}">{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $row->created_at)->format('M d, Y h:i A')}}</a></li>
                                </ul>
                            </div>
                        </article>

                    </div>
                    @endforeach

                </div>

            </div>
            <!-- Single Page Content -->
        </div>

    </div>


@endsection
