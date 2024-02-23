@if (auth()->user()->role->name ==='admin')
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
            <div class="brand-logo d-flex align-items-center justify-content-between">
                <a href="{{route('admin.index')}}" class="text-nowrap logo-img">
                    <img src="{{asset($website->website_logo)}}" class="dark-logo" width="180" alt="" />
                    <img src="{{asset($website->website_logo)}}" class="light-logo"  width="180" alt="" />
                </a>
                <div class="cursor-pointer close-btn d-lg-none d-block sidebartoggler" id="sidebarCollapse">
                    <i class="ti ti-x fs-8 text-muted"></i>
                </div>
            </div>
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav scroll-sidebar" data-simplebar>
                <ul id="sidebarnav">
                    <!-- ============================= -->
                    <!-- Intro -->
                    <!-- ============================= -->
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Dashboard</span>
                    </li>
                    <!-- =================== -->
                    <!-- Dashboard -->
                    <!-- =================== -->
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('admin.index')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-aperture"></i>
                  </span>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>

                {{-- Main sidebar start --}}
                <!-- =================== -->
                    <!-- Recipe Intro -->
                    <!-- =================== -->
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Blog</span>
                    </li>
                    <!-- =================== -->
                    <!-- Books -->
                    <!-- =================== -->
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('category.index')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-category-2"></i>
                  </span>
                            <span class="hide-menu">Category</span>
                        </a>
                    </li>
{{--                    <li class="sidebar-item">--}}
{{--                        <a class="sidebar-link" href="{{route('recipe.list')}}" aria-expanded="false">--}}
{{--                  <span>--}}
{{--                    <i class="ti ti-cookie"></i>--}}
{{--                  </span>--}}
{{--                            <span class="hide-menu">Recipe</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <!-- =================== -->

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('blog.list')}}">
                  <span>
                    <i class="ti ti-brand-blogger"></i>
                  </span>
                            <span class="hide-menu">Blog</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('comment.message')}}">
                      <span>
                        <i class="ti ti-message-2-share"></i>
                      </span>
                            <span class="hide-menu">Comment List</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('socials.index')}}">
                          <span>
                            <i class="ti ti-brand-facebook"></i>
                          </span>
                            <span class="hide-menu">Socials Link</span>
                        </a>
                    </li>
                    <!-- =================== -->
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Website</span>
                    </li>
{{--                    <li class="sidebar-item">--}}
{{--                        <a class="sidebar-link" href="{{route('page.homeAbout')}}">--}}
{{--                      <span>--}}
{{--                        <i class="ti ti-user-bolt"></i>--}}
{{--                      </span>--}}
{{--                            <span class="hide-menu">About Section</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('new-page.index')}}">
                      <span>
                        <i class="ti ti-new-section"></i>
                      </span>
                            <span class="hide-menu">Pages</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('newsletters.index')}}">
                      <span>
                        <i class="ti ti-new-section"></i>
                      </span>
                            <span class="hide-menu">Subscriber</span>
                        </a>
                    </li>
{{--                    <li class="sidebar-item">--}}
{{--                        <a class="sidebar-link" href="{{route('page.homeAbout')}}">--}}
{{--                      <span>--}}
{{--                        <i class="ti ti-user-bolt"></i>--}}
{{--                      </span>--}}
{{--                            <span class="hide-menu">About Section</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('page.homePrivacy')}}">
                      <span>
                        <i class="ti ti-user-bolt"></i>
                      </span>
                            <span class="hide-menu">Privacy Policy</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('admin.setting')}}">
                  <span>
                    <i class="ti ti-settings"></i>
                  </span>
                            <span class="hide-menu">Website Setting</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('home')}}" target="_blank">
                  <span>
                    <i class="ti ti-world"></i>
                  </span>
                            <span class="hide-menu">Visit Website</span>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
@else
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
            <div class="brand-logo d-flex align-items-center justify-content-between">
                <a href="{{route('admin.index')}}" class="text-nowrap logo-img">
                    <img src="{{asset('back')}}/assets/images/logos/dark-logo.svg" class="dark-logo" width="180" alt="" />
                    <img src="{{asset('back')}}/assets/images/logos/light-logo.svg" class="light-logo"  width="180" alt="" />
                </a>
                <div class="cursor-pointer close-btn d-lg-none d-block sidebartoggler" id="sidebarCollapse">
                    <i class="ti ti-x fs-8 text-muted"></i>
                </div>
            </div>
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav scroll-sidebar" data-simplebar>
                <ul id="sidebarnav">
                    <!-- ============================= -->
                    <!-- Intro -->
                    <!-- ============================= -->
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Dashboard</span>
                    </li>
                    <!-- =================== -->
                    <!-- Dashboard -->
                    <!-- =================== -->
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('dashboard')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-aperture"></i>
                  </span>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>

                    <!-- =================== -->
                    <!-- Books Intro -->
                    <!-- =================== -->
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Books</span>
                    </li>
                    <!-- =================== -->
                    <!-- Books -->
                    <!-- =================== -->
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('user.myBooks')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-book-upload"></i>
                  </span>
                            <span class="hide-menu">My Books</span>
                        </a>
                    </li>
                    <!-- =================== -->
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Website</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('home')}}" target="_blank">
                  <span>
                    <i class="ti ti-world"></i>
                  </span>
                            <span class="hide-menu">Visit Website</span>
                        </a>
                    </li>

                </ul>
            </nav>
            <div class="p-3 mt-3 rounded fixed-profile bg-light-secondary sidebar-ad">
                <div class="gap-3 hstack">
                    <div class="john-img">
                        <img src="{{asset('back')}}/assets/images/profile/user-1.jpg" class="rounded-circle" width="40" height="40" alt="">
                    </div>
                    <div class="john-title">
                        <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
                        <span class="fs-2 text-dark">Designer</span>
                    </div>
                    <button class="bg-transparent border-0 text-primary ms-auto" tabindex="0" type="button" aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                        <i class="ti ti-power fs-6"></i>
                    </button>
                </div>
            </div>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
@endif
