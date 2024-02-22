<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="description"
          content="{{$website->description}}">
    <meta name="keywords"
          content="{{$website->keywords}}"/>
    <meta property="og:title" content="{{$website->name}}">
    <meta property="og:description"
          content="{{$website->description}}">
    <meta property="og:image" content="{{$website->website_logo}}">
    <meta property="og:url" content="{{$website->url}}">
    <link rel="icon" href="{{asset($website->fav_icon)}}" type="image/x-icon">
   <!-- Font Imports -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400;500;700&family=Roboto:wght@400;500&family=Literata:opsz,wght@7..72,700&display=swap" rel="stylesheet">
    <!-- Core Style -->
    <link rel="stylesheet" href="{{asset('front')}}/style.css">
    <!-- Font Icons -->
    <link rel="stylesheet" href="{{asset('front')}}/css/font-icons.css">
    <!-- Niche Demos -->
    <link rel="stylesheet" href="{{asset('front')}}/demos/blog/blog.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('front')}}/css/custom.css">
    <link rel="stylesheet" href="{{asset('/')}}iziToast/dist/css/iziToast.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Document Title
    ============================================= -->
    <title>@yield('title')</title>

</head>

<body class="stretched search-overlay">

<div id="fb-root"></div><script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0&appId=915724525182895&autoLogAppEvents=1"></script>

<!-- Document Wrapper
============================================= -->
<div id="wrapper">

@include('frontEnd.inc.header')

    <!-- Content
    ============================================= -->
    <section id="content">
       @yield('content')
    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
@include('frontEnd.inc.footer')

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="uil uil-angle-up rounded-circle" style="left: 30px; right: auto;"></div>

<!-- JavaScripts
============================================= -->
<script src="{{asset('front')}}/js/plugins.min.js"></script>
<script src="{{asset('front')}}/js/functions.bundle.js"></script>
<script src="{{asset('/')}}iziToast/dist/js/iziToast.min.js"></script>
<!-- ADD-ONS JS FILES -->
<script>
    // Current Date
    var weekday = ["Sun","Mon","Tues","Wed","Thurs","Fri","Sat"],
        month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        a = new Date();

    document.querySelector('.date-today span').innerHTML = weekday[a.getDay()] + ', ' + month[a.getMonth()] + ' ' + a.getDate();
</script>

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
