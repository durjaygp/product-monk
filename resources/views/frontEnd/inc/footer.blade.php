<footer class="flex w-full flex-col bg-green-200 py-10 px-4" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="mx-auto w-full max-w-6xl">
        <div class="flex flex-col-reverse justify-between space-x-0 md:flex-row md:space-x-8">
            <div class="w-full">
                <div class="w-full max-w-lg">
                    <div class="flex space-x-4">
                        <div>
                            <div class="h-10 w-10 overflow-hidden rounded">
                                <figure class="aspect-square relative h-full overflow-hidden w-full"><img
                                        width="200" height="200"
                                        src="{{asset($website->website_logo)}}"
                                        alt="{{$website->name}}" class="absolute inset-0 h-full w-full object-cover">
                                </figure>
                            </div>
                        </div>
                        <div>
                            <h4 class=" text-gray-900 text-md sm:text-lg font-bold">{{$website->name}}</h4>
                            <p class="text-md tracking-wide opacity-75  text-gray-900 text-sm font-medium">
                                {{$website->description}}</p>
                        </div>
                    </div>
                    <div class="w-full pt-4">
                        <div class="flex w-full flex-col items-center space-y-4">
                            <form class="group w-full rounded-wt bg-transparent" method="post" action="{{route('newsletters.store')}}">
                                @csrf
                                <div class="flex flex-col">
                                    <div class="w-full sm:mx-auto sm:flex">
                                        <div class="w-full"><input type="email" name="email" required=""
                                                                   class=" border-gray-900 focus:border-gray-900 sm:rounded-r-none block w-full rounded border-2 bg-white px-5 py-3 text-base font-light text-black placeholder-gray-400 shadow-none placeholder:text-sm focus:outline-none sm:shadow-none"
                                                                   placeholder="Enter your email" value=""></div>
                                        <div class="mt-2 sm:mt-0"><input type="submit"
                                                                         class=" bg-gray-900 text-white sm:rounded-l-none block h-full w-full cursor-pointer rounded border border-transparent px-5 py-3 text-sm font-medium transition duration-200 sm:px-10 sm:text-base"
                                                                         value="Subscribe"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="mt-4 flex items-center">
                            <!-- Social -->
                            <div>
                                <div class="flex flex-col space-y-1">
                                    <div class="flex space-x-2 transition-all">
                                        <div class="flex items-end space-x-2">
                                            <a href="#">
                                                    <span
                                                        class="text-md tracking-wide  text-gray-800 text-sm font-medium">
                                                        <svg class="h-4 w-4 fill-current opacity-40 hover:opacity-100"
                                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                            <g>
                                                                <path
                                                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z">
                                                                </path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                            </a>
                                            <a href="#"><span
                                                    class="text-md tracking-wide  text-gray-800 text-sm font-medium">
                                                        <svg class="h-4 w-4 fill-current opacity-40 hover:opacity-100"
                                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                            <path
                                                                d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                            </a>
                                            <a href="#">
                                                    <span
                                                        class="text-md tracking-wide  text-gray-800 text-sm font-medium">
                                                        <svg class="h-4 w-4 fill-current opacity-40 hover:opacity-100"
                                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                            <path
                                                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                            </a>
                                            <a href="#">
                                                    <span
                                                        class="text-md tracking-wide  text-gray-800 text-sm font-medium">
                                                        <svg class="h-4 w-4 fill-current opacity-40 hover:opacity-100"
                                                             xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                             viewBox="0 0 24 24">
                                                            <path
                                                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden  w-full flex-grow flex-col justify-between md:block">
                <div>
                    <div class="flex w-full">
                        <div class="flex w-full justify-start space-x-6">
                            <div class="flex flex-col">
                                <span class="text-md font-semibold sm:block  text-gray-800 text-md font-regular">Pages</span>
                                <a href="{{route('home')}}">
                                    <span class="text-sm opacity-75 hover:text-gray-900  text-gray-800 text-md font-medium">Home</span>
                                </a>
                                <a href="{{route('privacy-policy')}}">
                                    <span class="text-sm opacity-75 hover:text-gray-900  text-gray-800 text-md font-medium">Privacy Policy </span>
                                </a>
                                @php
                                    $pages = \App\Models\NewPages::latest()->whereStatus(1)->get()
                                @endphp
                                @foreach($pages as $row)
                                    <a href="{{route('home.page',$row->slug)}}">
                                        <span class="text-sm opacity-75 hover:text-gray-900  text-gray-800 text-md font-medium">{{$row->title}}</span>
                                    </a>
                                @endforeach

                            </div>
                            <div class="flex space-x-6"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="mt-8 flex flex-col items-center justify-between space-y-4 border-t border-white/40 pt-6 sm:flex-row sm:space-y-0">
            <div>
                <div class="flex flex-col items-center space-x-2 md:flex-row">
                    <div class="mb-3 flex items-center space-x-0 md:mb-0 md:space-x-2"><span
                            class="extra-light text-xs text-gray-800 text-md font-regular">{{$website->footer}}</span>
                        <div class="hidden h-4 border-r border-gray-400 md:block"></div>
                    </div>
                    <div class="flex items-center space-x-2">
                            <span
                                class="extra-light whitespace-nowrap text-xs underline underline-offset-1 text-gray-800 text-md font-regular">
                                <a href="{{route('privacy-policy')}}">Privacy
                                    Policy</a>
                            </span>
                        <div class="h-4 border-r border-gray-400"></div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
