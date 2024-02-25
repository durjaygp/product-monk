@extends('frontEnd.master')
@section('title')
    {{ $page->title }}
@endsection
@section('content')
    <!-- Main Section Start -->
    <main class="flex w-full flex-grow px-4">
        <div class="mx-auto flex w-full flex-col max-w-none py-0">
            <div>
                <div class="relative mx-auto w-full max-w-6xl px-0 sm:px-4">

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
                                    <span class="opacity-70">Pages</span><svg xmlns="http://www.w3.org/2000/svg"
                                                                              fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                                              aria-hidden="true" height="14px">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </li>
                                <li class="flex items-center gap-2 text-gray-900">
                                    <span class="!opacity-100">{{$page->title}}</span>
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
                                                {{$page->title}}
                                            </h1>
                                            <h3 style="
                            font-size: 20px;
                            font-family: 'Helvetica', Arial, sans-serif;
                            line-height: 1.75rem;
                            padding-bottom: 33px;
                            color: #929292;
                            font-weight: 400;
                          ">
                                                {{$page->description}}
                                            </h3>
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
                                                         src="{{asset($page->image)}}" />
                                                </div>
                                                <style>
                                                    p span[style*="font-size"] {
                                                        line-height: 1.6;
                                                    }
                                                </style>
                                            </div>
                                            {!! $page->main_content !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </main>
    <!-- Main Section End -->
@endsection
