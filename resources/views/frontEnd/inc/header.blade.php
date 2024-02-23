<header class="bg-green-200 py-2">
    <nav class="flex items-center justify-between bg-green-200 py-2 px-4">
        <div class="mx-auto flex w-full max-w-6xl justify-between">
            <div class="flex items-center space-x-2"><a class="transition:all rounded-md py-1 px-2 hover:bg-black/5"
                                                        href="{{route('home')}}">
                    <div class="flex items-center space-x-2">
                        <div class="h-8 w-8 overflow-hidden rounded-md">
                            <figure class="aspect-square relative h-full overflow-hidden w-full"><img
                                    class="absolute inset-0 h-full w-full object-cover" width="100" height="100"
                                    src="{{asset($website->website_logo)}}"
                                    alt="{{$website->name}}"></figure>
                        </div>
                        <span
                            class="sm:text-md text-gray-900 hidden text-sm sm:block  text-gray-800 text-md font-regular">{{$website->name}}</span>
                    </div>
                </a>
                <div class="z-20 block">
                    <div class="z-20 flex"></div>
                </div>
            </div>
            <div class="z-20 flex items-center">
                <div class="mr-2"><a
                        class="border font-medium rounded-md shadow-sm  inline-flex items-center disabled:bg-gray-400 disabled:cursor-not-allowed focus:outline-none focus:ring-2 focus:ring-offset-2 justify-center px-4 py-2 text-sm border-gray-900 text-white bg-gray-900 focus:ring-gray-900"
                        href="#">Subscribe</a></div>
                <div>
                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                            class="rounded-full transition-all" type="button">
                        <div class="mt-1.5"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                 stroke-width="2" stroke="currentColor" aria-hidden="true"
                                                 class="h-6 w-6 stroke-1 text-gray-800 opacity-60 hover:opacity-100">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16">
                                </path>
                            </svg>
                        </div>
                    </button>

                    <!-- Dropdown -->
                    <div class="z-10 hidden" id="dropdown">
                        <div aria-labelledby="dropdownDefaultButton"
                             class="min-w-48 absolute top-2 right-0 flex flex-col rounded-sm bg-green-200 shadow-sm focus:outline-none">
                            <a href="#">
                                <div
                                    class="group flex items-center space-x-2 rounded-wt py-2 px-3 hover:bg-black/5">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="2" stroke="currentColor" aria-hidden="true"
                                         class="h-3 w-3 text-gray-800">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z">
                                        </path>
                                    </svg><span
                                        class="whitespace-nowrap text-xs sm:block  text-gray-800 text-md font-regular">Newsletters</span>
                                </div>
                            </a>
                            <a href="{{route('login')}}" class="whitespace-nowrap text-xs text-gray-800" role="menuitem" tabindex="-1">
                                <div
                                    class="group flex items-center space-x-2 rounded-wt py-2 px-3 hover:bg-black/5">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="2" stroke="currentColor" aria-hidden="true"
                                         class="h-3 w-3 text-gray-800">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                        </path>
                                    </svg>
                                    <div class="whitespace-nowrap text-xs text-gray-800 sm:block">Login
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
