<footer id="footer" class="bg-danger">



    <!-- Copyrights
    ============================================= -->
    <div id="copyrights" class="bg-dark">
        <div class="container">

            <div class="row align-items-center justify-content-between col-mb-30">
                <div class="text-center text-white">

                    {{$website->footer}}<br>
                    <a href="#" class="text-white m-2">Home</a>
                    @php
                        $new = \App\Models\NewPages::latest()->get();
                    @endphp
                    @foreach($new as $row)
                        <a href="{{route('home.page',$row->slug)}}" class="text-white m-2">{{$row->title}}</a>
                    @endforeach
                    <a href="{{route('home.about')}}" class="text-white m-2">About Me</a>
                    <a href="{{route('privacy-policy')}}" class="text-white m-2">Privacy Policy</a>

                </div>
            </div>

        </div>
    </div><!-- #copyrights end -->
</footer><!-- #footer end -->
