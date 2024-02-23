@extends('frontEnd.master')
@section('title')
{{$website->name}}
@endsection
@section('content')
    <div class="flex min-h-screen flex-col overflow-x-hidden pb-8">
        <!-- Heros Section Start -->
        <section class="relative bg-cover bg-center bg-no-repeat px-4 pb-4 pt-16 bg-white">
            <div class="absolute top-0 left-0 h-full w-full opacity-0 bg-white"></div>
            <div class="relative z-10 mx-auto flex w-full max-w-6xl flex-col bg-white">
                <div
                    class="mx-auto mb-10 w-full max-w-xl p-0 rounded-lg border bg-transparent border-transparent">
                    <div class="flex-start flex flex-col items-center py-2">
                        <div class="mb-4 overflow-hidden rounded h-20 w-20 shadow-sm">
                            <figure class="aspect-square relative h-full overflow-hidden w-full"><img
                                    width="128" height="128"
                                    src="https://media.beehiiv.com/cdn-cgi/image/fit=scale-down,format=auto,onerror=redirect,quality=80/uploads/publication/logo/51dbdc62-9076-48d9-a446-8938504125ba/PM_Lo.png"
                                    alt="Product Monk" class="absolute inset-0 h-full w-full object-cover">
                            </figure>
                        </div>
                        <div class="space-y-1">
                            <h1 class="w-full text-center text-4xl sm:text-5xl font-bold text-gray-900">
                                {{$website->name}}</h1>
                            <p class="w-full text-center text-xl sm:text-2xl font-regular  text-gray-900">
                                {{$website->description}}
                            </p>
                        </div>
                    </div>
                    <div class="mx-auto mt-4 flex w-full max-w-xl justify-center">
                        <div class="flex w-full flex-col items-center space-y-4">
                            <form class="group w-full rounded-wt bg-transparent" method="post" action="{{route('newsletters.store')}}">
                                @csrf
                                <div class="flex flex-col">
                                    <div class="w-full sm:mx-auto sm:flex">
                                        <div class="w-full">
                                            <input type="email" name="email" required=""
                                                   class="border-gray-900 focus:border-gray-900 sm:rounded-r-none block w-full rounded border-2 bg-white px-5 py-3 text-base font-light text-black placeholder-gray-400 shadow-none placeholder:text-sm focus:outline-none sm:shadow-none border-gray-900"
                                                   placeholder="Enter your email">
                                        </div>
                                        <div class="mt-2 sm:mt-0">
                                            <input type="submit"
                                                   class="bg-gray-900 text-white sm:rounded-l-none block h-full w-full cursor-pointer rounded border border-transparent px-5 py-3 text-sm font-medium transition duration-200 sm:px-10 sm:text-base bg-gray-900 text-white"
                                                   value="Subscribe">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
{{--                Social Media Icon--}}
                <div class="flex items-end justify-between">
                    <div>
                        <p
                            class="mb-1 whitespace-nowrap text-xs font-semibold text-md font-regular text-gray-900">
                            Connect</p>
                        <span
                            class="mb-0.5 whitespace-nowrap text-xs font-semibold text-md font-regular text-gra900">
                                    <div class="flex items-end space-x-2">
                                        <a href="#">
                                            <svg class="fill-current opacity-40 hover:opacity-100 h-4 w-4"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <g>
                                                    <path
                                                        d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z">
                                                    </path>
                                                </g>
                                            </svg>
                                        </a>
                                        <a href="#">
                                            <svg class="fill-current opacity-40 hover:opacity-100 h-4 w-4"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path
                                                    d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                                                </path>
                                            </svg>
                                        </a>
                                        <a href="#">
                                            <svg class="fill-current opacity-40 hover:opacity-100 h-4 w-4"
                                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path
                                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z">
                                                </path>
                                            </svg>
                                        </a>
                                        <a href="#">
                                            <svg class="fill-current opacity-40 hover:opacity-100 h-4 w-4"
                                                 xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </span>
                    </div>
                </div>

            </div>
        </section>
        <!-- Heros Section End -->

        <!-- Featured Posts Start -->
        <div class="px-4">
            <div class="mx-auto w-full max-w-6xl">
                <div class="mb-0 w-full lg:mb-16">
                    <div class="w-full space-y-4 py-8">
                        <div class="flex w-full items-center justify-between">
                            <h4 class="text-lg sm:text-xl font-bold " style="color: rgb(0, 39, 103);">Featured
                                Blogs</h4>
                        </div>
                        <div class="grid w-full grid-cols-3 gap-6">
                            @foreach($blogs as $row)
                                <div class="col-span-3 w-full md:col-span-1">
                                    <div
                                        class="group h-full overflow-hidden transition-all shadow-none hover:shadow-none rounded-lg bg-white border-white">
                                        <a class="group flex h-full w-full border transition-all group-hover:brightness-110 rounded-lg flex-col bg-white border-white"
                                           href="{{route('home.blog',$row->slug)}}">
                                            <div class="w-full">
                                                <div class="w-full overflow-hidden rounded-lg">
                                                    <figure
                                                        class="aspect-[1.9/1] relative h-full overflow-hidden w-full">
                                                        <img width="800" height="421"
                                                             src="{{asset($row->image)}}"
                                                             class="absolute inset-0 h-full w-full object-cover" alt="{{$row->name}}">
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="flex w-full flex-col justify-between space-y-6 p-4">
                                                <div>
                                                    <div class="flex justify-between space-x-4">
                                                        <div class="space-y-1">
                                                            <h2
                                                                class="break-words line-clamp-4 text-lg sm:text-xl font-bold text-gray-900">
                                                                {{ $row->name }}</h2>
                                                            <p
                                                                class="break-words line-clamp-2 text-sm font-regular text-gray-900">
                                                                {{ $row->description }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="pt-6">
                                                        <p
                                                            class="flex flex-col space-y-1 no-underline opacity-75 text-sm font-regular text-gray-900">
                                                                <span class="text-xs font-semibold"> {{$row->user->name}} </span><time datetime="2024-01-31T04:29:49.018Z"
                                                                                  class="text-xs">{{ $row->created_at->diffForHumans() }}</time>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="space-y-2">
                                                    <div class="flex flex-wrap gap-2">
                                                          @php
                                                              $categorys = json_decode($row->category_id,true);
                                                          @endphp
                                                        @foreach($categorys as $category)
                                                            <div
                                                                class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900">
                                                                @php
                                                                    $cat = \App\Models\Category::where('id',$category)->first();
                                                                @endphp
                                                                <span
                                                                    class="text-white font-medium text-xs sm:text-sm font-regular "><span
                                                                        class="text-xs">{{ $cat->name }}</span></span>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featured Posts End -->


        <div class="px-4">
            <div class="mx-auto w-full max-w-6xl">
                <div class="grid w-full grid-cols-12">
                    <div class="order-last col-span-12 py-2 lg:order-first mb-8">
                        <div>
                            <!-- Search Post Start -->
                            <div class="mb-8">
                                <div class="relative w-full pb-4">
                                    <div
                                        class="group relative w-full text-wt-text-on-background transition-all">
                                        <div class="absolute top-2.5"><svg xmlns="http://www.w3.org/2000/svg"
                                                                           fill="none" viewBox="0 0 24 24" stroke-width="2"
                                                                           stroke="currentColor" aria-hidden="true" class="h-4 w-4"
                                                                           style="color: rgb(34, 34, 34);">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                            </svg></div><input type="text" name="q" id="q"
                                                               class="text-regular w-full rounded-none border-b border-transparent bg-transparent py-2 pl-6 text-sm outline-none transition-all focus:border-transparent focus:opacity-100 text-gray-900 border-b-gray-900"
                                                               placeholder="Search posts..." value="">
                                    </div>
                                </div>
                                <div class="mb-2 flex flex-wrap gap-2">
                                    <button type="button"
                                            class="rounded-md border-gray-900 text-gray-900 bg-transparent border py-1 px-2 text-xs">Product
                                        Strategy
                                    </button>
                                    <button type="button"
                                            class="rounded-md border-gray-900 text-gray-900 bg-transparent border py-1 px-2 text-xs">Product
                                        Case Study
                                    </button>
                                    <button type="button"
                                            class="rounded-md border-gray-900 text-gray-900 bg-transparent border py-1 px-2 text-xs">Product
                                        Management Fundamentals
                                    </button>
                                    <button type="button"
                                            class="rounded-md border-gray-900 text-gray-900 bg-transparent border py-1 px-2 text-xs">Product
                                        Management Tools
                                    </button>
                                    <button type="button"
                                            class="rounded-md border-gray-900 text-gray-900 bg-transparent border py-1 px-2 text-xs">GTM
                                    </button>
                                    <button type="button"
                                            class="rounded-md border-gray-900 text-gray-900 bg-transparent border py-1 px-2 text-xs">Product
                                        Design
                                    </button>
                                    <button type="button"
                                            class="rounded-md border-gray-900 text-gray-900 bg-transparent border py-1 px-2 text-xs">Product
                                        Technology
                                    </button>
                                    <button type="button"
                                            class="rounded-md border-gray-900 text-gray-900 bg-transparent border py-1 px-2 text-xs">Product
                                        Analytics
                                    </button>
                                    <button type="button"
                                            class="rounded-md border-gray-900 text-gray-900 bg-transparent border py-1 px-2 text-xs">Product
                                        Marketing
                                    </button>
                                    <button type="button"
                                            class="rounded-md border-gray-900 text-gray-900 bg-transparent border py-1 px-2 text-xs">MVP/MLP
                                    </button>
                                </div>
                            </div>
                            <!-- Search Post End -->



                            <!-- Post List Start -->
                            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                                <div
                                    class="group h-full overflow-hidden transition-all shadow-none hover:shadow-none rounded-lg bg-white border-white">
                                    <a class="group flex h-full w-full border transition-all group-hover:brightness-110 rounded-lg flex-col bg-white border-white"
                                       href="#">
                                        <div class="w-full">
                                            <div class="w-full overflow-hidden rounded-lg">
                                                <figure
                                                    class="aspect-[1.9/1] relative h-full overflow-hidden w-full">
                                                    <img loading="eager" width="800" height="421"
                                                         src="https://media.beehiiv.com/cdn-cgi/image/format=auto,width=800,height=421,fit=scale-down,onerror=redirect/uploads/asset/file/ce7052bc-86a0-4ddd-9e67-c0018f65bb82/image.png"
                                                         alt="Tumblr: Why 150+ Millions Abandoned it?"
                                                         class="absolute inset-0 h-full w-full object-cover">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-col justify-between space-y-6 p-4">
                                            <div>
                                                <div class="flex justify-between space-x-4">
                                                    <div class="space-y-1">
                                                        <h2
                                                            class="break-words line-clamp-4 text-lg sm:text-xl font-bold text-gray-900">
                                                            Tumblr: Why 150+
                                                            Millions Abandoned it?</h2>
                                                        <p
                                                            class="break-words line-clamp-2 text-sm font-regular text-gray-900">
                                                            Tumblr no longer the
                                                            go-to social platform for youngsters :(</p>
                                                    </div>
                                                </div>
                                                <div class="pt-6">
                                                    <p
                                                        class="flex flex-col space-y-1 no-underline opacity-75 text-sm font-regular text-gray-900">
                                                                <span class="text-xs font-semibold">Aneesha
                                                                    S
                                                                </span>
                                                        <span class="text-xs">a day ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="space-y-2">
                                                <div class="flex flex-wrap gap-2">
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900 text-white">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Case Study</span></span>
                                                    </div>
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Management
                                                                        Fundamentals</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div
                                    class="group h-full overflow-hidden transition-all shadow-none hover:shadow-none rounded-lg bg-white border-white">
                                    <a class="group flex h-full w-full border transition-all group-hover:brightness-110 rounded-lg flex-col bg-white border-white"
                                       href="#">
                                        <div class="w-full">
                                            <div class="w-full overflow-hidden rounded-lg">
                                                <figure
                                                    class="aspect-[1.9/1] relative h-full overflow-hidden w-full">
                                                    <img loading="eager" width="800" height="421"
                                                         src="https://media.beehiiv.com/cdn-cgi/image/format=auto,width=800,height=421,fit=scale-down,onerror=redirect/uploads/asset/file/ce7052bc-86a0-4ddd-9e67-c0018f65bb82/image.png"
                                                         alt="Tumblr: Why 150+ Millions Abandoned it?"
                                                         class="absolute inset-0 h-full w-full object-cover">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-col justify-between space-y-6 p-4">
                                            <div>
                                                <div class="flex justify-between space-x-4">
                                                    <div class="space-y-1">
                                                        <h2
                                                            class="break-words line-clamp-4 text-lg sm:text-xl font-bold text-gray-900">
                                                            Tumblr: Why 150+
                                                            Millions Abandoned it?</h2>
                                                        <p
                                                            class="break-words line-clamp-2 text-sm font-regular text-gray-900">
                                                            Tumblr no longer the
                                                            go-to social platform for youngsters :(</p>
                                                    </div>
                                                </div>
                                                <div class="pt-6">
                                                    <p
                                                        class="flex flex-col space-y-1 no-underline opacity-75 text-sm font-regular text-gray-900">
                                                                <span class="text-xs font-semibold">Aneesha
                                                                    S
                                                                </span>
                                                        <span class="text-xs">a day ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="space-y-2">
                                                <div class="flex flex-wrap gap-2">
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900 text-white">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Case Study</span></span>
                                                    </div>
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Management
                                                                        Fundamentals</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div
                                    class="group h-full overflow-hidden transition-all shadow-none hover:shadow-none rounded-lg bg-white border-white">
                                    <a class="group flex h-full w-full border transition-all group-hover:brightness-110 rounded-lg flex-col bg-white border-white"
                                       href="#">
                                        <div class="w-full">
                                            <div class="w-full overflow-hidden rounded-lg">
                                                <figure
                                                    class="aspect-[1.9/1] relative h-full overflow-hidden w-full">
                                                    <img loading="eager" width="800" height="421"
                                                         src="https://media.beehiiv.com/cdn-cgi/image/format=auto,width=800,height=421,fit=scale-down,onerror=redirect/uploads/asset/file/ce7052bc-86a0-4ddd-9e67-c0018f65bb82/image.png"
                                                         alt="Tumblr: Why 150+ Millions Abandoned it?"
                                                         class="absolute inset-0 h-full w-full object-cover">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-col justify-between space-y-6 p-4">
                                            <div>
                                                <div class="flex justify-between space-x-4">
                                                    <div class="space-y-1">
                                                        <h2
                                                            class="break-words line-clamp-4 text-lg sm:text-xl font-bold text-gray-900">
                                                            Tumblr: Why 150+
                                                            Millions Abandoned it?</h2>
                                                        <p
                                                            class="break-words line-clamp-2 text-sm font-regular text-gray-900">
                                                            Tumblr no longer the
                                                            go-to social platform for youngsters :(</p>
                                                    </div>
                                                </div>
                                                <div class="pt-6">
                                                    <p
                                                        class="flex flex-col space-y-1 no-underline opacity-75 text-sm font-regular text-gray-900">
                                                                <span class="text-xs font-semibold">Aneesha
                                                                    S
                                                                </span>
                                                        <span class="text-xs">a day ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="space-y-2">
                                                <div class="flex flex-wrap gap-2">
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900 text-white">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Case Study</span></span>
                                                    </div>
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Management
                                                                        Fundamentals</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div
                                    class="group h-full overflow-hidden transition-all shadow-none hover:shadow-none rounded-lg bg-white border-white">
                                    <a class="group flex h-full w-full border transition-all group-hover:brightness-110 rounded-lg flex-col bg-white border-white"
                                       href="#">
                                        <div class="w-full">
                                            <div class="w-full overflow-hidden rounded-lg">
                                                <figure
                                                    class="aspect-[1.9/1] relative h-full overflow-hidden w-full">
                                                    <img loading="eager" width="800" height="421"
                                                         src="https://media.beehiiv.com/cdn-cgi/image/format=auto,width=800,height=421,fit=scale-down,onerror=redirect/uploads/asset/file/ce7052bc-86a0-4ddd-9e67-c0018f65bb82/image.png"
                                                         alt="Tumblr: Why 150+ Millions Abandoned it?"
                                                         class="absolute inset-0 h-full w-full object-cover">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-col justify-between space-y-6 p-4">
                                            <div>
                                                <div class="flex justify-between space-x-4">
                                                    <div class="space-y-1">
                                                        <h2
                                                            class="break-words line-clamp-4 text-lg sm:text-xl font-bold text-gray-900">
                                                            Tumblr: Why 150+
                                                            Millions Abandoned it?</h2>
                                                        <p
                                                            class="break-words line-clamp-2 text-sm font-regular text-gray-900">
                                                            Tumblr no longer the
                                                            go-to social platform for youngsters :(</p>
                                                    </div>
                                                </div>
                                                <div class="pt-6">
                                                    <p
                                                        class="flex flex-col space-y-1 no-underline opacity-75 text-sm font-regular text-gray-900">
                                                                <span class="text-xs font-semibold">Aneesha
                                                                    S
                                                                </span>
                                                        <span class="text-xs">a day ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="space-y-2">
                                                <div class="flex flex-wrap gap-2">
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900 text-white">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Case Study</span></span>
                                                    </div>
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Management
                                                                        Fundamentals</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div
                                    class="group h-full overflow-hidden transition-all shadow-none hover:shadow-none rounded-lg bg-white border-white">
                                    <a class="group flex h-full w-full border transition-all group-hover:brightness-110 rounded-lg flex-col bg-white border-white"
                                       href="#">
                                        <div class="w-full">
                                            <div class="w-full overflow-hidden rounded-lg">
                                                <figure
                                                    class="aspect-[1.9/1] relative h-full overflow-hidden w-full">
                                                    <img loading="eager" width="800" height="421"
                                                         src="https://media.beehiiv.com/cdn-cgi/image/format=auto,width=800,height=421,fit=scale-down,onerror=redirect/uploads/asset/file/ce7052bc-86a0-4ddd-9e67-c0018f65bb82/image.png"
                                                         alt="Tumblr: Why 150+ Millions Abandoned it?"
                                                         class="absolute inset-0 h-full w-full object-cover">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-col justify-between space-y-6 p-4">
                                            <div>
                                                <div class="flex justify-between space-x-4">
                                                    <div class="space-y-1">
                                                        <h2
                                                            class="break-words line-clamp-4 text-lg sm:text-xl font-bold text-gray-900">
                                                            Tumblr: Why 150+
                                                            Millions Abandoned it?</h2>
                                                        <p
                                                            class="break-words line-clamp-2 text-sm font-regular text-gray-900">
                                                            Tumblr no longer the
                                                            go-to social platform for youngsters :(</p>
                                                    </div>
                                                </div>
                                                <div class="pt-6">
                                                    <p
                                                        class="flex flex-col space-y-1 no-underline opacity-75 text-sm font-regular text-gray-900">
                                                                <span class="text-xs font-semibold">Aneesha
                                                                    S
                                                                </span>
                                                        <span class="text-xs">a day ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="space-y-2">
                                                <div class="flex flex-wrap gap-2">
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900 text-white">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Case Study</span></span>
                                                    </div>
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Management
                                                                        Fundamentals</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div
                                    class="group h-full overflow-hidden transition-all shadow-none hover:shadow-none rounded-lg bg-white border-white">
                                    <a class="group flex h-full w-full border transition-all group-hover:brightness-110 rounded-lg flex-col bg-white border-white"
                                       href="#">
                                        <div class="w-full">
                                            <div class="w-full overflow-hidden rounded-lg">
                                                <figure
                                                    class="aspect-[1.9/1] relative h-full overflow-hidden w-full">
                                                    <img loading="eager" width="800" height="421"
                                                         src="https://media.beehiiv.com/cdn-cgi/image/format=auto,width=800,height=421,fit=scale-down,onerror=redirect/uploads/asset/file/ce7052bc-86a0-4ddd-9e67-c0018f65bb82/image.png"
                                                         alt="Tumblr: Why 150+ Millions Abandoned it?"
                                                         class="absolute inset-0 h-full w-full object-cover">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-col justify-between space-y-6 p-4">
                                            <div>
                                                <div class="flex justify-between space-x-4">
                                                    <div class="space-y-1">
                                                        <h2
                                                            class="break-words line-clamp-4 text-lg sm:text-xl font-bold text-gray-900">
                                                            Tumblr: Why 150+
                                                            Millions Abandoned it?</h2>
                                                        <p
                                                            class="break-words line-clamp-2 text-sm font-regular text-gray-900">
                                                            Tumblr no longer the
                                                            go-to social platform for youngsters :(</p>
                                                    </div>
                                                </div>
                                                <div class="pt-6">
                                                    <p
                                                        class="flex flex-col space-y-1 no-underline opacity-75 text-sm font-regular text-gray-900">
                                                                <span class="text-xs font-semibold">Aneesha
                                                                    S
                                                                </span>
                                                        <span class="text-xs">a day ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="space-y-2">
                                                <div class="flex flex-wrap gap-2">
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900 text-white">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Case Study</span></span>
                                                    </div>
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Management
                                                                        Fundamentals</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div
                                    class="group h-full overflow-hidden transition-all shadow-none hover:shadow-none rounded-lg bg-white border-white">
                                    <a class="group flex h-full w-full border transition-all group-hover:brightness-110 rounded-lg flex-col bg-white border-white"
                                       href="#">
                                        <div class="w-full">
                                            <div class="w-full overflow-hidden rounded-lg">
                                                <figure
                                                    class="aspect-[1.9/1] relative h-full overflow-hidden w-full">
                                                    <img loading="eager" width="800" height="421"
                                                         src="https://media.beehiiv.com/cdn-cgi/image/format=auto,width=800,height=421,fit=scale-down,onerror=redirect/uploads/asset/file/ce7052bc-86a0-4ddd-9e67-c0018f65bb82/image.png"
                                                         alt="Tumblr: Why 150+ Millions Abandoned it?"
                                                         class="absolute inset-0 h-full w-full object-cover">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-col justify-between space-y-6 p-4">
                                            <div>
                                                <div class="flex justify-between space-x-4">
                                                    <div class="space-y-1">
                                                        <h2
                                                            class="break-words line-clamp-4 text-lg sm:text-xl font-bold text-gray-900">
                                                            Tumblr: Why 150+
                                                            Millions Abandoned it?</h2>
                                                        <p
                                                            class="break-words line-clamp-2 text-sm font-regular text-gray-900">
                                                            Tumblr no longer the
                                                            go-to social platform for youngsters :(</p>
                                                    </div>
                                                </div>
                                                <div class="pt-6">
                                                    <p
                                                        class="flex flex-col space-y-1 no-underline opacity-75 text-sm font-regular text-gray-900">
                                                                <span class="text-xs font-semibold">Aneesha
                                                                    S
                                                                </span>
                                                        <span class="text-xs">a day ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="space-y-2">
                                                <div class="flex flex-wrap gap-2">
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900 text-white">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Case Study</span></span>
                                                    </div>
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Management
                                                                        Fundamentals</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div
                                    class="group h-full overflow-hidden transition-all shadow-none hover:shadow-none rounded-lg bg-white border-white">
                                    <a class="group flex h-full w-full border transition-all group-hover:brightness-110 rounded-lg flex-col bg-white border-white"
                                       href="#">
                                        <div class="w-full">
                                            <div class="w-full overflow-hidden rounded-lg">
                                                <figure
                                                    class="aspect-[1.9/1] relative h-full overflow-hidden w-full">
                                                    <img loading="eager" width="800" height="421"
                                                         src="https://media.beehiiv.com/cdn-cgi/image/format=auto,width=800,height=421,fit=scale-down,onerror=redirect/uploads/asset/file/ce7052bc-86a0-4ddd-9e67-c0018f65bb82/image.png"
                                                         alt="Tumblr: Why 150+ Millions Abandoned it?"
                                                         class="absolute inset-0 h-full w-full object-cover">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-col justify-between space-y-6 p-4">
                                            <div>
                                                <div class="flex justify-between space-x-4">
                                                    <div class="space-y-1">
                                                        <h2
                                                            class="break-words line-clamp-4 text-lg sm:text-xl font-bold text-gray-900">
                                                            Tumblr: Why 150+
                                                            Millions Abandoned it?</h2>
                                                        <p
                                                            class="break-words line-clamp-2 text-sm font-regular text-gray-900">
                                                            Tumblr no longer the
                                                            go-to social platform for youngsters :(</p>
                                                    </div>
                                                </div>
                                                <div class="pt-6">
                                                    <p
                                                        class="flex flex-col space-y-1 no-underline opacity-75 text-sm font-regular text-gray-900">
                                                                <span class="text-xs font-semibold">Aneesha
                                                                    S
                                                                </span>
                                                        <span class="text-xs">a day ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="space-y-2">
                                                <div class="flex flex-wrap gap-2">
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900 text-white">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Case Study</span></span>
                                                    </div>
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Management
                                                                        Fundamentals</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div
                                    class="group h-full overflow-hidden transition-all shadow-none hover:shadow-none rounded-lg bg-white border-white">
                                    <a class="group flex h-full w-full border transition-all group-hover:brightness-110 rounded-lg flex-col bg-white border-white"
                                       href="#">
                                        <div class="w-full">
                                            <div class="w-full overflow-hidden rounded-lg">
                                                <figure
                                                    class="aspect-[1.9/1] relative h-full overflow-hidden w-full">
                                                    <img loading="eager" width="800" height="421"
                                                         src="https://media.beehiiv.com/cdn-cgi/image/format=auto,width=800,height=421,fit=scale-down,onerror=redirect/uploads/asset/file/ce7052bc-86a0-4ddd-9e67-c0018f65bb82/image.png"
                                                         alt="Tumblr: Why 150+ Millions Abandoned it?"
                                                         class="absolute inset-0 h-full w-full object-cover">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-col justify-between space-y-6 p-4">
                                            <div>
                                                <div class="flex justify-between space-x-4">
                                                    <div class="space-y-1">
                                                        <h2
                                                            class="break-words line-clamp-4 text-lg sm:text-xl font-bold text-gray-900">
                                                            Tumblr: Why 150+
                                                            Millions Abandoned it?</h2>
                                                        <p
                                                            class="break-words line-clamp-2 text-sm font-regular text-gray-900">
                                                            Tumblr no longer the
                                                            go-to social platform for youngsters :(</p>
                                                    </div>
                                                </div>
                                                <div class="pt-6">
                                                    <p
                                                        class="flex flex-col space-y-1 no-underline opacity-75 text-sm font-regular text-gray-900">
                                                                <span class="text-xs font-semibold">Aneesha
                                                                    S
                                                                </span>
                                                        <span class="text-xs">a day ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="space-y-2">
                                                <div class="flex flex-wrap gap-2">
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900 text-white">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Case Study</span></span>
                                                    </div>
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Management
                                                                        Fundamentals</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div
                                    class="group h-full overflow-hidden transition-all shadow-none hover:shadow-none rounded-lg bg-white border-white">
                                    <a class="group flex h-full w-full border transition-all group-hover:brightness-110 rounded-lg flex-col bg-white border-white"
                                       href="#">
                                        <div class="w-full">
                                            <div class="w-full overflow-hidden rounded-lg">
                                                <figure
                                                    class="aspect-[1.9/1] relative h-full overflow-hidden w-full">
                                                    <img loading="eager" width="800" height="421"
                                                         src="https://media.beehiiv.com/cdn-cgi/image/format=auto,width=800,height=421,fit=scale-down,onerror=redirect/uploads/asset/file/ce7052bc-86a0-4ddd-9e67-c0018f65bb82/image.png"
                                                         alt="Tumblr: Why 150+ Millions Abandoned it?"
                                                         class="absolute inset-0 h-full w-full object-cover">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-col justify-between space-y-6 p-4">
                                            <div>
                                                <div class="flex justify-between space-x-4">
                                                    <div class="space-y-1">
                                                        <h2
                                                            class="break-words line-clamp-4 text-lg sm:text-xl font-bold text-gray-900">
                                                            Tumblr: Why 150+
                                                            Millions Abandoned it?</h2>
                                                        <p
                                                            class="break-words line-clamp-2 text-sm font-regular text-gray-900">
                                                            Tumblr no longer the
                                                            go-to social platform for youngsters :(</p>
                                                    </div>
                                                </div>
                                                <div class="pt-6">
                                                    <p
                                                        class="flex flex-col space-y-1 no-underline opacity-75 text-sm font-regular text-gray-900">
                                                                <span class="text-xs font-semibold">Aneesha
                                                                    S
                                                                </span>
                                                        <span class="text-xs">a day ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="space-y-2">
                                                <div class="flex flex-wrap gap-2">
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900 text-white">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Case Study</span></span>
                                                    </div>
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Management
                                                                        Fundamentals</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div
                                    class="group h-full overflow-hidden transition-all shadow-none hover:shadow-none rounded-lg bg-white border-white">
                                    <a class="group flex h-full w-full border transition-all group-hover:brightness-110 rounded-lg flex-col bg-white border-white"
                                       href="#">
                                        <div class="w-full">
                                            <div class="w-full overflow-hidden rounded-lg">
                                                <figure
                                                    class="aspect-[1.9/1] relative h-full overflow-hidden w-full">
                                                    <img loading="eager" width="800" height="421"
                                                         src="https://media.beehiiv.com/cdn-cgi/image/format=auto,width=800,height=421,fit=scale-down,onerror=redirect/uploads/asset/file/ce7052bc-86a0-4ddd-9e67-c0018f65bb82/image.png"
                                                         alt="Tumblr: Why 150+ Millions Abandoned it?"
                                                         class="absolute inset-0 h-full w-full object-cover">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-col justify-between space-y-6 p-4">
                                            <div>
                                                <div class="flex justify-between space-x-4">
                                                    <div class="space-y-1">
                                                        <h2
                                                            class="break-words line-clamp-4 text-lg sm:text-xl font-bold text-gray-900">
                                                            Tumblr: Why 150+
                                                            Millions Abandoned it?</h2>
                                                        <p
                                                            class="break-words line-clamp-2 text-sm font-regular text-gray-900">
                                                            Tumblr no longer the
                                                            go-to social platform for youngsters :(</p>
                                                    </div>
                                                </div>
                                                <div class="pt-6">
                                                    <p
                                                        class="flex flex-col space-y-1 no-underline opacity-75 text-sm font-regular text-gray-900">
                                                                <span class="text-xs font-semibold">Aneesha
                                                                    S
                                                                </span>
                                                        <span class="text-xs">a day ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="space-y-2">
                                                <div class="flex flex-wrap gap-2">
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900 text-white">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Case Study</span></span>
                                                    </div>
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Management
                                                                        Fundamentals</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div
                                    class="group h-full overflow-hidden transition-all shadow-none hover:shadow-none rounded-lg bg-white border-white">
                                    <a class="group flex h-full w-full border transition-all group-hover:brightness-110 rounded-lg flex-col bg-white border-white"
                                       href="#">
                                        <div class="w-full">
                                            <div class="w-full overflow-hidden rounded-lg">
                                                <figure
                                                    class="aspect-[1.9/1] relative h-full overflow-hidden w-full">
                                                    <img loading="eager" width="800" height="421"
                                                         src="https://media.beehiiv.com/cdn-cgi/image/format=auto,width=800,height=421,fit=scale-down,onerror=redirect/uploads/asset/file/ce7052bc-86a0-4ddd-9e67-c0018f65bb82/image.png"
                                                         alt="Tumblr: Why 150+ Millions Abandoned it?"
                                                         class="absolute inset-0 h-full w-full object-cover">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-col justify-between space-y-6 p-4">
                                            <div>
                                                <div class="flex justify-between space-x-4">
                                                    <div class="space-y-1">
                                                        <h2
                                                            class="break-words line-clamp-4 text-lg sm:text-xl font-bold text-gray-900">
                                                            Tumblr: Why 150+
                                                            Millions Abandoned it?</h2>
                                                        <p
                                                            class="break-words line-clamp-2 text-sm font-regular text-gray-900">
                                                            Tumblr no longer the
                                                            go-to social platform for youngsters :(</p>
                                                    </div>
                                                </div>
                                                <div class="pt-6">
                                                    <p
                                                        class="flex flex-col space-y-1 no-underline opacity-75 text-sm font-regular text-gray-900">
                                                                <span class="text-xs font-semibold">Aneesha
                                                                    S
                                                                </span>
                                                        <span class="text-xs">a day ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="space-y-2">
                                                <div class="flex flex-wrap gap-2">
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900 text-white">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Case Study</span></span>
                                                    </div>
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Management
                                                                        Fundamentals</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div
                                    class="group h-full overflow-hidden transition-all shadow-none hover:shadow-none rounded-lg bg-white border-white">
                                    <a class="group flex h-full w-full border transition-all group-hover:brightness-110 rounded-lg flex-col bg-white border-white"
                                       href="#">
                                        <div class="w-full">
                                            <div class="w-full overflow-hidden rounded-lg">
                                                <figure
                                                    class="aspect-[1.9/1] relative h-full overflow-hidden w-full">
                                                    <img loading="eager" width="800" height="421"
                                                         src="https://media.beehiiv.com/cdn-cgi/image/format=auto,width=800,height=421,fit=scale-down,onerror=redirect/uploads/asset/file/ce7052bc-86a0-4ddd-9e67-c0018f65bb82/image.png"
                                                         alt="Tumblr: Why 150+ Millions Abandoned it?"
                                                         class="absolute inset-0 h-full w-full object-cover">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-col justify-between space-y-6 p-4">
                                            <div>
                                                <div class="flex justify-between space-x-4">
                                                    <div class="space-y-1">
                                                        <h2
                                                            class="break-words line-clamp-4 text-lg sm:text-xl font-bold text-gray-900">
                                                            Tumblr: Why 150+
                                                            Millions Abandoned it?</h2>
                                                        <p
                                                            class="break-words line-clamp-2 text-sm font-regular text-gray-900">
                                                            Tumblr no longer the
                                                            go-to social platform for youngsters :(</p>
                                                    </div>
                                                </div>
                                                <div class="pt-6">
                                                    <p
                                                        class="flex flex-col space-y-1 no-underline opacity-75 text-sm font-regular text-gray-900">
                                                                <span class="text-xs font-semibold">Aneesha
                                                                    S
                                                                </span>
                                                        <span class="text-xs">a day ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="space-y-2">
                                                <div class="flex flex-wrap gap-2">
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900 text-white">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Case Study</span></span>
                                                    </div>
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Management
                                                                        Fundamentals</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div
                                    class="group h-full overflow-hidden transition-all shadow-none hover:shadow-none rounded-lg bg-white border-white">
                                    <a class="group flex h-full w-full border transition-all group-hover:brightness-110 rounded-lg flex-col bg-white border-white"
                                       href="#">
                                        <div class="w-full">
                                            <div class="w-full overflow-hidden rounded-lg">
                                                <figure
                                                    class="aspect-[1.9/1] relative h-full overflow-hidden w-full">
                                                    <img loading="eager" width="800" height="421"
                                                         src="https://media.beehiiv.com/cdn-cgi/image/format=auto,width=800,height=421,fit=scale-down,onerror=redirect/uploads/asset/file/ce7052bc-86a0-4ddd-9e67-c0018f65bb82/image.png"
                                                         alt="Tumblr: Why 150+ Millions Abandoned it?"
                                                         class="absolute inset-0 h-full w-full object-cover">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-col justify-between space-y-6 p-4">
                                            <div>
                                                <div class="flex justify-between space-x-4">
                                                    <div class="space-y-1">
                                                        <h2
                                                            class="break-words line-clamp-4 text-lg sm:text-xl font-bold text-gray-900">
                                                            Tumblr: Why 150+
                                                            Millions Abandoned it?</h2>
                                                        <p
                                                            class="break-words line-clamp-2 text-sm font-regular text-gray-900">
                                                            Tumblr no longer the
                                                            go-to social platform for youngsters :(</p>
                                                    </div>
                                                </div>
                                                <div class="pt-6">
                                                    <p
                                                        class="flex flex-col space-y-1 no-underline opacity-75 text-sm font-regular text-gray-900">
                                                                <span class="text-xs font-semibold">Aneesha
                                                                    S
                                                                </span>
                                                        <span class="text-xs">a day ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="space-y-2">
                                                <div class="flex flex-wrap gap-2">
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900 text-white">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Case Study</span></span>
                                                    </div>
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Management
                                                                        Fundamentals</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div
                                    class="group h-full overflow-hidden transition-all shadow-none hover:shadow-none rounded-lg bg-white border-white">
                                    <a class="group flex h-full w-full border transition-all group-hover:brightness-110 rounded-lg flex-col bg-white border-white"
                                       href="#">
                                        <div class="w-full">
                                            <div class="w-full overflow-hidden rounded-lg">
                                                <figure
                                                    class="aspect-[1.9/1] relative h-full overflow-hidden w-full">
                                                    <img loading="eager" width="800" height="421"
                                                         src="https://media.beehiiv.com/cdn-cgi/image/format=auto,width=800,height=421,fit=scale-down,onerror=redirect/uploads/asset/file/ce7052bc-86a0-4ddd-9e67-c0018f65bb82/image.png"
                                                         alt="Tumblr: Why 150+ Millions Abandoned it?"
                                                         class="absolute inset-0 h-full w-full object-cover">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-col justify-between space-y-6 p-4">
                                            <div>
                                                <div class="flex justify-between space-x-4">
                                                    <div class="space-y-1">
                                                        <h2
                                                            class="break-words line-clamp-4 text-lg sm:text-xl font-bold text-gray-900">
                                                            Tumblr: Why 150+
                                                            Millions Abandoned it?</h2>
                                                        <p
                                                            class="break-words line-clamp-2 text-sm font-regular text-gray-900">
                                                            Tumblr no longer the
                                                            go-to social platform for youngsters :(</p>
                                                    </div>
                                                </div>
                                                <div class="pt-6">
                                                    <p
                                                        class="flex flex-col space-y-1 no-underline opacity-75 text-sm font-regular text-gray-900">
                                                                <span class="text-xs font-semibold">Aneesha
                                                                    S
                                                                </span>
                                                        <span class="text-xs">a day ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="space-y-2">
                                                <div class="flex flex-wrap gap-2">
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900 text-white">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Case Study</span></span>
                                                    </div>
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Management
                                                                        Fundamentals</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div
                                    class="group h-full overflow-hidden transition-all shadow-none hover:shadow-none rounded-lg bg-white border-white">
                                    <a class="group flex h-full w-full border transition-all group-hover:brightness-110 rounded-lg flex-col bg-white border-white"
                                       href="#">
                                        <div class="w-full">
                                            <div class="w-full overflow-hidden rounded-lg">
                                                <figure
                                                    class="aspect-[1.9/1] relative h-full overflow-hidden w-full">
                                                    <img loading="eager" width="800" height="421"
                                                         src="https://media.beehiiv.com/cdn-cgi/image/format=auto,width=800,height=421,fit=scale-down,onerror=redirect/uploads/asset/file/ce7052bc-86a0-4ddd-9e67-c0018f65bb82/image.png"
                                                         alt="Tumblr: Why 150+ Millions Abandoned it?"
                                                         class="absolute inset-0 h-full w-full object-cover">
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="flex w-full flex-col justify-between space-y-6 p-4">
                                            <div>
                                                <div class="flex justify-between space-x-4">
                                                    <div class="space-y-1">
                                                        <h2
                                                            class="break-words line-clamp-4 text-lg sm:text-xl font-bold text-gray-900">
                                                            Tumblr: Why 150+
                                                            Millions Abandoned it?</h2>
                                                        <p
                                                            class="break-words line-clamp-2 text-sm font-regular text-gray-900">
                                                            Tumblr no longer the
                                                            go-to social platform for youngsters :(</p>
                                                    </div>
                                                </div>
                                                <div class="pt-6">
                                                    <p
                                                        class="flex flex-col space-y-1 no-underline opacity-75 text-sm font-regular text-gray-900">
                                                                <span class="text-xs font-semibold">Aneesha
                                                                    S
                                                                </span>
                                                        <span class="text-xs">a day ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="space-y-2">
                                                <div class="flex flex-wrap gap-2">
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900 text-white">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Case Study</span></span>
                                                    </div>
                                                    <div
                                                        class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900">
                                                                <span
                                                                    class="text-xs font-medium sm:text-sm font-regular text-white"><span
                                                                        class="text-xs">Product Management
                                                                        Fundamentals</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="flex w-full justify-center">
                                    <button
                                        class="w-full items-center justify-center border transition-all h-full bg-white border-white text-gray-900">
                                                <span class="text-lg sm:text-xl font-regular text-gray-900">Load
                                                    More</span>
                                    </button>
                                </div>
                            </div>
                            <!-- Post List End -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
