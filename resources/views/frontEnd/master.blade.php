<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('homePage/assets/css/tailwind.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link rel="icon" type="image/x-icon" href="{{asset($website->fav_icon)}}">
    <link rel="stylesheet" href="{{asset('/')}}iziToast/dist/css/iziToast.min.css">


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

<script src="{{asset('/')}}iziToast/dist/js/iziToast.min.js"></script>
@if($errors->any())
    @foreach($errors->all() as $error)
        <script>
            iziToast.error({
                title: '',
                position:'topRight',
                message: '{{$error}}',
            });
        </script>
    @endforeach

@endif

@if(session()->get('success'))
    <script>
        iziToast.success({
            title: '',
            position:'topRight',
            message: '{{session()->get('success')}}',
        });

    </script>
@endif

</body>
</html>
