<!-- Header
    ============================================= -->
<header id="header" class="header-size-custom" data-sticky-shrink="false">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row justify-content-lg-between">

                <!-- Logo
                ============================================= -->
                <div id="logo" class="mx-lg-auto col-auto flex-column order-lg-2 px-0">
                    <a href="{{route('home')}}">
                        <img class="logo-default"  srcset="{{asset($website->website_logo)}}, {{asset($website->website_logo)}}" src="{{asset($website->website_logo)}}" alt="{{$website->name}}">

{{--                   <img class="logo-dark" srcset="{{asset('front')}}/demos/blog/images/logo-dark.png, {{asset('front')}}/demos/blog/images/logo-dark@2x.png 2x" src="{{asset('front')}}/demos/blog/images/logo-dark@2x.png" alt="Canvas Logo">--}}
{{--                   <img class="logo-mobile" srcset="{{asset('front')}}/demos/blog/images/mobile-logo.png, {{asset('front')}}/demos/blog/images/mobile-logo@2x.png 2x" src="{{asset('front')}}/demos/blog/images/mobile-logo@2x.png" alt="Canvas Logo">--}}

                    </a>
                    <span class="divider divider-center date-today"><span class="divider-text"></span></span>
                </div><!-- #logo end -->

                <div class="col-auto col-lg-3 order-lg-1 d-none d-md-flex px-0">

                    <div class="social-icons">
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

                <div class="header-misc col-auto col-lg-3 justify-content-lg-end ms-0 ms-sm-3 px-0">

                    <!-- Bookmark
                    ============================================= -->
                    @if(auth()->check())
                        @if(auth()->user()->role->name === 'admin')
                            <div class="dropdown dropdown-langs">
                                <button class="btn dropdown-toggle px-1" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dashboard
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                    <a href="{{route('admin.index')}}" class="dropdown-item"> Dashboard</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{route('logout')}}"
                                           onclick="event.preventDefault();
                                        this.closest('form').submit();" class="dropdown-item"> Logout</a>
                                    </form>
                                </div>
                            </div>
                        @else
                            <div class="dropdown dropdown-langs">
                                <button class="btn dropdown-toggle px-1" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Profile
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                    <a href="{{route('logout')}}"
                                        onclick="event.preventDefault();
                                        this.closest('form').submit();" class="dropdown-item"> Logout</a>
                                    </form>
                                </div>
                            </div>
                        @endif
                    @else
                    @endif


                <!-- Top Search
                        ============================================= -->
                    <div id="top-search" class="header-misc-icon">
                        <a href="#" id="top-search-trigger"><i class="uil uil-search"></i><i class="bi-x-lg"></i></a>
                    </div><!-- #top-search end -->

                    <div class="dark-mode header-misc-icon d-none d-md-block">
                        <a href="#" class="body-scheme-toggle" data-bodyclass-toggle="dark" data-add-html="<i class='bi-sun'></i>" data-remove-html="<i class='bi-moon-stars'></i>"><i class="bi-moon-stars"></i></a>
                    </div>
                </div>

                <div class="primary-menu-trigger">
                    <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                        <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
                    </button>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="header-row justify-content-lg-center header-border">

                <!-- Primary Navigation
                ============================================= -->
                <nav class="primary-menu with-arrows">

                    <ul class="menu-container justify-content-between">
                        <li class="menu-item {{ (\Illuminate\Support\Facades\Request::route() && \Illuminate\Support\Facades\Request::route()->getName() == 'home') ? 'current' : '' }}"><a class="menu-link" href="{{route('home')}}"><div>Home</div></a></li>

                        @php
                            $category = \App\Models\Category::latest()->take(5)->get();
                        @endphp
                        @foreach($category as $row)
                            <li class="menu-item {{ (\Illuminate\Support\Facades\Request::route() && \Illuminate\Support\Facades\Request::route()->getName() == 'home.category' && \Illuminate\Support\Facades\Request::route()->parameter('slug') == $row->slug) ? 'current' : '' }}">
                                <a class="menu-link" href="{{ route('home.category', $row->slug) }}">
                                    <div>{{ $row->name }}</div>
                                </a>
                            </li>
                        @endforeach
                          <li class="menu-item {{ (\Illuminate\Support\Facades\Request::route() && \Illuminate\Support\Facades\Request::route()->getName() == 'home.about') ? 'current' : '' }}"><a class="menu-link" href="{{route('home.about')}}"><div>About Me</div></a></li>
                        <li class="menu-item {{ (\Illuminate\Support\Facades\Request::route() && \Illuminate\Support\Facades\Request::route()->getName() == 'privacy-policy') ? 'current' : '' }}"><a class="menu-link" href="{{route('privacy-policy')}}"><div>Privacy Policy</div></a></li>

                    </ul>

                </nav><!-- #primary-menu end -->

                <form  class="top-search-form"  method="get" action="{{route('search.blog')}}">
                    @csrf
                    <input type="text" name="search" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
                </form>

            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>

</header><!-- #header end -->
