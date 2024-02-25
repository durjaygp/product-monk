@extends('frontEnd.master')
@section('title')
    {{$cleanedSearch}}
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
                                {{$cleanedSearch}}</h1>
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

            </div>
        </section>
        <!-- Heros Section End -->

        <div class="px-4">
            <div class="mx-auto w-full max-w-6xl">
                <div class="grid w-full grid-cols-12">
                    <div class="order-last col-span-12 py-2 lg:order-first mb-8">
                        <div>

                            <!-- Post List Start -->
                            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                                @foreach($blog as $next)
                                    {{-- Skip the first 2 blog posts --}}
                                    <div class="group h-full overflow-hidden transition-all shadow-none hover:shadow-none rounded-lg bg-white border-white">
                                        <a class="group flex h-full w-full border transition-all group-hover:brightness-110 rounded-lg flex-col bg-white border-white"
                                           href="{{route('home.blog',$next->slug)}}">
                                            <div class="w-full">
                                                <div class="w-full overflow-hidden rounded-lg">
                                                    <figure
                                                        class="aspect-[1.9/1] relative h-full overflow-hidden w-full">
                                                        <img loading="eager" width="800" height="421"
                                                             src="{{asset($next->image)}}"
                                                             alt="{{$next->name}}"
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
                                                                {{$next->name}}
                                                            </h2>
                                                            <p
                                                                class="break-words line-clamp-2 text-sm font-regular text-gray-900">
                                                                {{$next->description}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="pt-6">
                                                        <p
                                                            class="flex flex-col space-y-1 no-underline opacity-75 text-sm font-regular text-gray-900">
                                                                <span class="text-xs font-semibold">{{$next->user->name}}
                                                                </span>
                                                            <span class="text-xs">{{$next->created_at->diffForHumans()}}</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="space-y-2">
                                                    <div class="flex flex-wrap gap-2">
                                                        @php
                                                            $categoryIds = json_decode($next->category_id, true);
                                                        @endphp

                                                        @if(is_array($categoryIds))
                                                            @foreach($categoryIds as $categoryId)
                                                                @php
                                                                    $category = \App\Models\Category::find($categoryId);
                                                                @endphp

                                                                @if($category)
                                                                    <div class="flex w-fit items-center space-x-1 rounded px-2 pb-0.5 bg-gray-900">
                                                                    <span class="text-white font-medium text-xs sm:text-sm font-regular">
                                                                        <span class="text-xs">{{ $category->name }}</span>
                                                                    </span>
                                                                    </div>
                                                                @endif
                                                            @endforeach
                                                        @else
                                                            {{-- Handle the case where $categoryIds is not an array --}}
                                                            {{-- You might want to add appropriate error handling or display a message --}}
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Post List End -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
