@extends('frontEnd.master')
@section('title')
{{ $blog->name }}
@endsection
@section('content')
    <!-- Main Section Start -->
    <main class="flex w-full flex-grow px-4">
        <div class="mx-auto flex w-full flex-col max-w-none py-0">
            <div>
                <div class="relative mx-auto w-full max-w-6xl px-0 sm:px-4">
                    <!-- Left Side toolbox -->
                    <div
                        class="fixed bottom-0 left-0 top-auto z-40 w-full rounded bg-white shadow-xl transition-all md:bottom-auto md:top-20 md:z-0 md:w-fit md:border-none md:shadow-none">
                        <div
                            class="absolute left-0 top-0 w-full border border-t border-wt-text-on-background bg-white opacity-10 md:hidden">
                        </div>
                        <div class="mx-auto w-full max-w-6xl px-0 md:px-4">
                            <div class="flex flex-col gap-8 md:h-40">
                                <div class="flex flex-row items-center md:flex-col">
                                    <div class="ml-4 pb-0 pt-0 md:-ml-4 md:pb-4 md:pt-2">
                                        <div
                                            class="flex h-7 w-7 items-center justify-center rounded-wt transition-all hover:bg-black/5">
                                            <button class="cursor-pointer">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke-width="2" stroke="currentColor" aria-hidden="true"
                                                     class="h-6 w-6 stroke-1 text-gray-900 opacity-50">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M11 17l-5-5m0 0l5-5m-5 5h12"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div
                                        class="-ml-2 mt-1 flex w-full flex-row items-center justify-center space-x-4 space-y-0 py-2 md:-ml-0 md:mt-0 md:flex-col md:items-start md:space-x-0 md:space-y-1.5 md:py-0">
                                        <button class="group pb-1.5" type="button">
                                            <div
                                                class="text-gray-900 opacity-50 group-hover:opacity-100 flex items-center space-x-1">
                                                <div class="rounded-full p-1.5 hover:bg-[#f3f4f6]">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                         class="mt-0.5 h-7 w-7 outline-none h-4 w-4 stroke-1">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <span
                                                    class="hidden text-transparent sm:block pt-0.5 text-sm font-medium group-hover:opacity-100">0</span>
                                            </div>
                                        </button><button
                                            class="group flex items-center space-x-1 pb-1 pt-1 outline-none md:pt-0">
                                            <div class="rounded-full p-1.5 hover:bg-[#f3f4f6]">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke-width="2" stroke="currentColor"
                                                     class="h-7 w-7 stroke-1 text-gray-900 opacity-50 group-hover:opacity-100">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155">
                                                    </path>
                                                </svg>
                                            </div>
                                            <span
                                                class="hidden text-[#6B7280] md:block pt-0.5 text-sm font-medium group-hover:opacity-100">0</span>
                                        </button>
                                        <div class="relative z-20 inline-block text-left md:z-0">
                                            <button class="outline-none" id="headlessui-menu-button-2" type="button"
                                                    aria-haspopup="true" aria-expanded="false">
                                                <div class="h-fit w-fit rounded-full p-1.5 hover:bg-[#f3f4f6]">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                         viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                         class="md:mt-0 mt-1.5 text-gray-900 opacity-50 hover:opacity-100 -ml-1 md:ml-0 h-7 w-7 stroke-1 text-gray-400">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Side Content -->
                    <div class="flex flex-col space-x-0 pb-4 sm:space-x-2">
                        <div class="mx-auto mt-8 w-full max-w-[655px] px-[15px]">
                            <ul class="flex flex-wrap items-center gap-2 text-xs font-semibold">
                                <li class="flex items-center gap-2 text-gray-900">
                                    <a href="../" class="opacity-70">{{$website->name}}</a><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" aria-hidden="true" height="14px">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </li>
                                <li class="flex items-center gap-2 text-gray-900">
                                    <span class="opacity-70">Blog</span><svg xmlns="http://www.w3.org/2000/svg"
                                                                              fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                                              aria-hidden="true" height="14px">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </li>
                                <li class="flex items-center gap-2 text-gray-900">
                                    <span class="!opacity-100">{{$blog->name}}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="relative w-full">
                            <link href="https://fonts.gstatic.com" rel="preconnect" />
                            <link href="https://fonts.googleapis.com/css2?family=Inter&amp;display=swap"
                                  rel="stylesheet" />
                            <link href="https://fonts.googleapis.com/css2?family=Inter&amp;display=swap"
                                  rel="stylesheet" />
                            <link href="https://fonts.googleapis.com/css2?family=Outfit&amp;display=swap"
                                  rel="stylesheet" />
                            <style type="text/css">
                                :root {
                                    --wt-primary-color: #002767;
                                    --wt-text-on-primary-color: #ffffff;

                                    --wt-secondary-color: #ffffff;
                                    --wt-text-on-secondary-color: #222222;

                                    --wt-tertiary-color: #59c491;
                                    --wt-text-on-tertiary-color: #222222;

                                    --wt-background-color: #ffffff;
                                    --wt-text-on-background-color: #222222;

                                    --wt-subscribe-background-color: #ffffff;
                                    --wt-text-on-subscribe-background-color: #222222;

                                    --wt-header-font: "Inter", ui-sans-serif, system-ui,
                                    -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                                    "Helvetica Neue", Arial, "Noto Sans", sans-serif,
                                    "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
                                    "Noto Color Emoji";
                                    --wt-body-font: "Inter", ui-sans-serif, system-ui,
                                    -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                                    "Helvetica Neue", Arial, "Noto Sans", sans-serif,
                                    "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
                                    "Noto Color Emoji";
                                    --wt-button-font: "Outfit", ui-sans-serif, system-ui,
                                    -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                                    "Helvetica Neue", Arial, "Noto Sans", sans-serif,
                                    "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
                                    "Noto Color Emoji";

                                    --wt-border-radius: 6px;
                                }


                                .text-wt-text-on-tertiary {
                                    color: var(--wt-text-on-tertiary-color);
                                }

                                .border-wt-text-on-tertiary {
                                    border-color: var(--wt-text-on-tertiary-color);
                                }

                                .bg-white {
                                    background-color: var(--wt-background-color);
                                }

                                .text-wt-background {
                                    color: var(--wt-background-color);
                                }

                                .border-wt-background {
                                    border-color: var(--wt-background-color);
                                }

                                .bg-wt-text-on-background {
                                    background-color: var(--wt-text-on-background-color);
                                }

                                .text-gray-900 {
                                    color: var(--wt-text-on-background-color);
                                }

                                .border-wt-text-on-background {
                                    border-color: var(--wt-text-on-background-color);
                                }

                                .bg-wt-subscribe-background {
                                    background-color: var(--wt-subscribe-background-color);
                                }

                                .text-wt-subscribe-background {
                                    color: var(--wt-subscribe-background-color);
                                }

                                .border-wt-subscribe-background {
                                    border-color: var(--wt-subscribe-background-color);
                                }

                                .bg-wt-text-on-subscribe-background {
                                    background-color: var(--wt-text-on-subscribe-background-color);
                                }

                                .text-wt-text-on-subscribe-background {
                                    color: var(--wt-text-on-subscribe-background-color);
                                }

                                .border-wt-text-on-subscribe-background {
                                    border-color: var(--wt-text-on-subscribe-background-color);
                                }

                                .rounded-wt {
                                    border-radius: var(--wt-border-radius);
                                }

                                .wt-header-font {
                                    font-family: var(--wt-header-font);
                                }

                                .wt-body-font {
                                    font-family: var(--wt-body-font);
                                }

                                .wt-button-font {
                                    font-family: var(--wt-button-font);
                                }

                                input:focus {
                                    --tw-ring-color: transparent !important;
                                }

                                li a {
                                    word-break: break-word;
                                }

                                @media only screen and (max-width: 667px) {
                                    .mob-stack {
                                        display: block !important;
                                        width: 100% !important;
                                    }

                                    .mob-w-full {
                                        width: 100% !important;
                                    }
                                }
                            </style>


                            <div class="rendered-post" style="max-width: 670px; margin: 0 auto">
                                <div class="bg-white text-gray-900">
                                    <div style="padding-top: 1.5rem; padding-bottom: 1.5rem">
                                        <style>
                                            .bh__byline_wrapper {
                                                font-size: 0.875rem;
                                                line-height: 1.25rem;
                                                vertical-align: middle;
                                                justify-content: space-between;
                                                display: block;
                                            }

                                            .bh__byline_social_wrapper {
                                                display: flex;
                                                margin-top: 0.5rem;
                                                align-items: center;
                                            }

                                            .bh__byline_social_wrapper>*+* {
                                                margin-left: 1rem;
                                            }

                                            @media (min-width: 768px) {
                                                .bh__byline_wrapper {
                                                    display: flex;
                                                }

                                                .bh__byline_social_wrapper {
                                                    margin-top: 0rem;
                                                }
                                            }
                                        </style>
                                        <div id="web-header" style="
                                                padding-left: 24px;
                                                padding-right: 24px;
                                                color: var(--wt-text-on-background-color) !important;
                                                padding-bottom: 2rem;
                                                ">
                                            <h1 style="
                            font-size: 36px;
                            font-family: 'Helvetica', Arial, sans-serif;
                            line-height: 2.5rem;
                            padding-bottom: 8px;
                            font-weight: 700;
                          ">
                                                {{$blog->name}}
                                            </h1>
                                            <h3 style="
                            font-size: 20px;
                            font-family: 'Helvetica', Arial, sans-serif;
                            line-height: 1.75rem;
                            padding-bottom: 33px;
                            color: #929292;
                            font-weight: 400;
                          ">
                                                {{$blog->description}}
                                            </h3>
                                            <div class="bh__byline_wrapper">
                                                <div>
                                                    <div style="display: flex">
                                                        <div style="
                                  display: flex;
                                  flex-direction: row;
                                  justify-content: flex-start;
                                ">
                                                            <div style="display: flex">
                                                                <img alt="Author" height="30"
                                                                     src="https://media.beehiiv.com/cdn-cgi/image/fit=scale-down,format=auto,onerror=redirect,quality=80/uploads/user/profile_picture/839a6674-f3e4-4cd4-bdc6-03fe8ea1ef4f/thumb_PicGrid_20230604_22254780.jpg"
                                                                     style="
                                      height: 30px;
                                      width: 30px;
                                      border: 3px solid rgba(0, 0, 0, 0);
                                      left: -3px;
                                      z-index: 10;
                                      box-sizing: content-box;
                                      position: relative;
                                      border-radius: 9999px;
                                    " width="30" />
                                                            </div>
                                                            <div style="display: flex; align-items: center">
                                                                <p style="
                                      left: 6px;
                                      position: relative;
                                      font-family: 'Open Sans', 'Segoe UI',
                                        'Lucida Grande', 'Lucida Sans Unicode',
                                        sans-serif;
                                      font-weight: Lighter;
                                      font-size: 12px;
                                      color: var(--wt-text-on-background-color);
                                      margin: 0px;
                                      line-height: 17px;
                                    ">
                                                                    <span>{{$blog->user->name}}</span><br /><span
                                                                        class="text-gray-900"
                                                                        style="opacity: 0.75">January 30, 2024</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="bh__byline_social_wrapper">
                                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ url('/') }}/blog/{{ $blog->slug }}"
                                                       target="_blank">
                                                        <div style="max-width: 28px">
                                                            <svg fill="none" height="100%" viewBox="0 0 212 211"
                                                                 width="100%" xmlns="http://www.w3.org/2000/svg">
                                                                <circle cx="106.214" cy="105.5" fill-opacity="0.15"
                                                                        fill="#9CA3AF" r="105.5"></circle>
                                                                <path
                                                                    d="M96.9223 92.1778H87.0327V105.498H96.9223V145.461H113.405V105.498H125.273L126.591 92.1778H113.405V86.5165C113.405 83.5193 114.064 82.1873 117.031 82.1873H126.591V65.5364H114.064C102.197 65.5364 96.9223 70.8647 96.9223 80.8552V92.1778Z"
                                                                    fill="#BAC2CE"></path>
                                                            </svg>
                                                        </div>
                                                    </a><a
                                                        href="https://twitter.com/intent/tweet?text={{ url('/') }}/blog/{{ $blog->slug }}"
                                                        target="_blank">
                                                        <div style="max-width: 28px">
                                                            <svg fill="none" height="100%" viewBox="0 0 52 52"
                                                                 width="100%" xmlns="http://www.w3.org/2000/svg">
                                                                <circle cx="26" cy="26" fill-opacity="0.15"
                                                                        fill="#9CA3AF" r="26"></circle>
                                                                <path
                                                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"
                                                                    fill="#BAC2CE" transform="translate(14,14)"></path>
                                                            </svg>
                                                        </div>
                                                    </a><a
                                                        href="https://www.linkedin.com/sharing/share-offsite?url={{ url('/') }}/blog/{{ $blog->slug }}"
                                                        target="_blank">
                                                        <div style="max-width: 28px">
                                                            <svg fill="none" height="100%" viewBox="0 0 211 211"
                                                                 width="100%" xmlns="http://www.w3.org/2000/svg">
                                                                <circle cx="105.5" cy="105.5" fill-opacity="0.15"
                                                                        fill="#9CA3AF" r="105.5"></circle>
                                                                <path
                                                                    d="M82.1892 75.4698C82.1892 80.1362 78.526 83.8026 73.8638 83.8026C69.2015 83.8026 65.5383 80.1362 65.5383 75.4698C65.5383 70.8034 69.2015 67.137 73.8638 67.137C78.526 67.137 82.1892 70.8034 82.1892 75.4698ZM82.1892 90.4689H65.5383V143.799H82.1892V90.4689ZM108.831 90.4689H92.1797V143.799H108.831V115.801C108.831 100.135 128.812 98.8017 128.812 115.801V143.799H145.463V110.134C145.463 83.8026 115.824 84.8026 108.831 97.8018V90.4689Z"
                                                                    fill="#BAC2CE"></path>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="content-blocks">
                                            <div style="
                            background-color: transparent;
                            margin: 0px 0px 0px 0px;
                            padding: 0px 0px 0px 0px;
                          ">
                                                <div style="
                              padding-bottom: 20px;
                              padding-left: 24px;
                              padding-right: 24px;
                              padding-top: 20px;
                            ">
                                                    <img alt="" style="margin: 0 auto 0 auto; width: 100%"
                                                         src="{{asset($blog->image)}}" />
                                                </div>
                                                <style>
                                                    p span[style*="font-size"] {
                                                        line-height: 1.6;
                                                    }
                                                </style>
                                            </div>
                                            {!! $blog->main_content !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Comments Start -->
                <div id="comments" class="space-y-8">
                    <div class="px-4 pb-8">
                        <div class="mx-auto max-w-2xl">
                            <h4 class="mb-4 leading-none text-gray-900 text-lg sm:text-xl font-bold">
                                Join the conversation
                            </h4>
                            <div>
                                <form method="post" action="">
                                    <div class="relative">
                                        <div
                                            class="overflow-hidden rounded-wt border border-gray-300 shadow-sm focus-within:border-gray-900 focus-within:ring-1 focus-within:ring-gray-900">
                                            <label for="comment" class="sr-only">Add your comment</label>
                                            <textarea rows="2"
                                                      name="content" id="comment"
                                                      class="block w-full resize-none border-0 bg-transparent p-3 text-sm focus:ring-0"
                                                      placeholder="Add your comment..." required=""></textarea>
                                            <div class="py-2" aria-hidden="true">
                                                <div class="py-px">
                                                    <div class="h-6"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="absolute inset-x-0 bottom-0 flex justify-between py-2 pl-3 pr-2">
                                            <div class="flex items-center space-x-5">
                                                <div class="flex-shrink-0"></div>
                                            </div>
                                            <div class="flex-shrink-0 pr-1">
                                                @auth
                                                    <button type="button"
                                                            class="border font-medium rounded-md shadow-sm wt-button-font inline-flex items-center rounded-wt disabled:bg-gray-400 disabled:cursor-not-allowed focus:outline-none focus:ring-2 focus:ring-offset-2 justify-center px-2 py-1 text-sm border-gray-900 text-white bg-gray-900 focus:ring-wt-primary">
                                                        Submit
                                                    </button>
                                                @else

                                                    <a href="{{route('login')}}"
                                                            class="border font-medium rounded-md shadow-sm wt-button-font inline-flex items-center rounded-wt disabled:bg-gray-400 disabled:cursor-not-allowed focus:outline-none focus:ring-2 focus:ring-offset-2 justify-center px-2 py-1 text-sm border-gray-900 text-white bg-gray-900 focus:ring-wt-primary">
                                                        Login
                                                    </a>
                                                @endauth

                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <span class="opacity-75 wt-body-font text-gray-900 text-xs sm:text-sm font-regular"><a
                                        href="{{route('login')}}"><span class="underline">Login</span></a>
                                    or
                                    <a href="{{route('register')}}"><span class="underline">Register</span></a>
                                    to participate.</span>
                            </div>
                        </div>
                    </div>
                    <div class="mx-auto w-full max-w-2xl px-4 pb-8 sm:px-0">
                        <h4 class="pb-6 leading-none sm:pb-2 text-gray-900 text-lg sm:text-xl font-bold">
                            Keep reading
                        </h4>
                        <div class="space-y-6">
                            <div class="flex flex-col">

                                @php
                                    $moreBlogs = \App\Models\Blog::latest()->limit(3)->get();
                                @endphp

                                @foreach($moreBlogs as $row)
                                    <a class="group relative flex grid w-full grid-cols-1 gap-x-8 gap-y-4 transition-all sm:my-6 sm:grid-cols-2 sm:gap-y-6 sm:gap-x-6 flex-row mb-6 gap-y-0 sm:mb-0"
                                       href="{{route('home.blog',$row->slug)}}">
                                        <div
                                            class="absolute inset-0 z-0 -m-4 rounded-wt bg-transparent transition duration-200 sm:-m-6 group-hover:bg-slate-100/50">
                                        </div>
                                        <div
                                            class="z-10 col-span-1 mb-2 w-full overflow-hidden rounded-wt border bg-slate-100/50">
                                            <figure class="aspect-[1.9/1] relative h-full overflow-hidden w-full">
                                                <img loading="lazy" width="800" height="421"
                                                     src="{{asset($row->image)}}"
                                                     alt="Google Maps: UX Strategy for 1 Billion+ MAU"
                                                     class="{{$row->name}}" />
                                            </figure>
                                        </div>
                                        <div class="z-10 col-span-1">
                                            <h2
                                                class="line-clamp-2 text-gray-900 wt-header-font text-gray-900 text-md font-bold">
                                                {{$row->name}}
                                            </h2>
                                            <p
                                                class="font-regular mb-2 opacity-75 text-gray-900 wt-header-font line-clamp-4 text-gray-900 text-sm font-regular">
                                                {{$row->description}}
                                            </p>
                                            <p
                                                class="mb-4 no-underline opacity-75 text-gray-900 wt-header-font text-gray-900 text-xs sm:text-sm font-regular">
                                                <span></span><time datetime="2024-01-17T04:30:00.000Z">{{$row->created_at->diffForHumans()}}</time>
                                            </p>
                                        </div>
                                    </a>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Main Section End -->
@endsection
