<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('homePage/assets/css/tailwind.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</head>

<body>
<!-- Header Start -->
@include('frontEnd.inc.header')
<!-- Header End -->

<!-- Main Section Start -->
<main class="flex w-full flex-grow px-4">
    <div class="mx-auto flex w-full flex-col max-w-none py-0">
        @yield('content')
    </div>
</main>
<!-- Main Section End -->

<!-- Footer Section Start -->
@include('frontEnd.inc.footer')
<!-- Footer Section End -->
</body>
</html>
