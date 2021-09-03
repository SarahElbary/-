@include('frontend.header')
@section('title','Privacy')


@include('frontend.headerads')

<img src="{{asset('img/a1.jpg')}}" alt="" style="margin-left: 455px;height: 215px;">

@yield('section')

<section class="privacy">
    <div class="container">
        @foreach ($page as $myPage)
            <h1> {{strip_tags($myPage->title)}}</h1>
            <div class="row" style="text-align: right">
                {!! $myPage->description !!}                                </p>
            </div>

        @endforeach

    </div>
</section>
@include('frontend.footer')
