
@extends('frontend.home')
@section('content')
@include('frontend.slider')
<section class="artical-a" style="margin-top: 3rem;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 card-artical-a-parent ">
                <div class="row">
                    @foreach ($randomArticles as $article2)
                        <div class="col-lg-4">
                            <div class="card-artical-a">
                                <div class="card-overlay-artical-a">
                                    <a href="department.html" class="badge badge-card badge-info">
                                        @foreach ($article2->categories as $category)
                                            {{ $category->name }}
                                        @endforeach

                                    </a>

                                    <h3><i class="far fa-eye"></i> {{ $article2->viewer }}</h3>

                                    <div class="star-header">
                                        <!--================-->
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>

                                    </div>
                                    <!--=======End-Star-header=========-->
                                    <span class="date"> <i class="far fa-calendar-alt"></i>
                                        {{ $article2->created_at->todatestring() }}
                                    </span>
                                </div>
                                <img src="{{ asset('storage/articles/' . $article2->image) }}" alt="">
                                <h1><a href="{{url('details/'.$article2->id)}}"> {{ $article2->name }}</a></h1>
                                <p>
                                     {{strip_tags(Str::words($article2->description,10))}}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            

        </div>

</section>
<!--===========end ==============-->
@yield('section')
<section class="artical-a">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 card-artical-a-parent ">
                <div class="row">
                    <div class="col-lg-12">
                        <img src="../img/ADS 3.png" alt="">
                    </div>
                    <!--========================================-->
                    @foreach ($internationalArticles as $internationalArticle)
                        <div class="col-lg-4">
                            <div class="card-artical-a">
                                <div class="card-overlay-artical-a">
                                    <a href="{{url('details/'.$internationalArticle->id)}}" target="_blank" class="badge badge-card badge-info">
                                        @foreach ($internationalArticle->categories as $category)
                                            {{ $category->name }}
                                        @endforeach
                                    </a>

                                    <h3><i class="far fa-eye"></i> {{ $internationalArticle->viewer }}</h3>

                                    <div class="star-header">
                                        <!--================-->
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>

                                    </div>
                                    <!--=======End-Star-header=========-->
                                    <span class="date"> <i class="far fa-calendar-alt"></i>
                                        {{ $article2->created_at->todatestring() }} </span>
                                </div>
                                <img src="{{ asset('storage/articles/' . $internationalArticle->image) }}" alt="">
                                <h1><a href="{{url('details/'.$internationalArticle->id)}}" target="_blank"> {{ $internationalArticle->name }} </a></h1>
                                <p>{{strip_tags(Str::words($internationalArticle->description,10))}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            

        </div>
    </div>

</section>
<section class="artical-a department">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 card-artical-a-parent ">
                <div class="row">
                    @foreach ($impotrantArticles as $item)

                        <!--========================================-->
                        <div class=" parent">

                            <a href="department.html" class="a-parent"> <img
                                    src="{{ asset('storage/articles/' . $item->image) }}" alt="">
                                    @foreach ($item->categories as $category)
                                    {{ $category->name }}
                                @endforeach
                            </a>
                            <div class="col-lg-4">
                                <div class="card-artical-a department-card">
                                    <div class="card-overlay-artical-a card-overlay-department-a">
                                        <!--=======End-Star-header=========-->
                                        <span class="date-2"> <i class="far fa-calendar-alt"></i>
                                            {{ $item->created_at->todatestring() }} </span>
                                    </div>
                                    <img src="{{ asset('storage/articles/' . $item->image) }}" alt="">

                                    <h1><a href="{{url('details/'.$item->id)}}">{{strip_tags(Str::words($item->description,10))}}  </span>
                                        </a></h1>
                                </div>
                            </div>
                        </div>
                        <!--========================================-->
                    @endforeach

                    <div class="col-lg-12">
                        <img src="../img/ADS 4.png" alt="">
                    </div>
                    @foreach ($internationalArticles as $articl)
                    <div class=" parent">

                        <a href="department.html" class="a-parent"> <img src="{{ asset('storage/articles/' . $articl->image) }}" alt="">
                            @foreach ($articl->categories as $category)
                            {{ $category->name }}
                        @endforeach
                        </a>
                        <div class="col-lg-4">
                            <div class="card-artical-a department-card">
                                <div class="card-overlay-artical-a card-overlay-department-a">
                                    <!--=======End-Star-header=========-->
                                    <span class="date-2"> <i class="far fa-calendar-alt"></i> {{ $articl->created_at->todatestring() }} </span>
                                </div>
                                <img src="{{ asset('storage/articles/' . $articl->image) }}" alt="">
                                <h1><a href="{{url('details/'.$articl->id)}}">  {{strip_tags(Str::words($articl->description,10))}}
                                    </a></h1>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="col-lg-12">
                        <img src="../img/ADS 6.png" alt="">
                    </div>
                    @foreach ($internationalArticles as $articl2)
                    <div class=" parent">

                        <a href="department.html" class="a-parent"> <img src="{{ asset('storage/articles/' . $articl2->image) }}" alt="">
                            @foreach ($articl2->categories as $category)
                            {{ $category->name }}
                        @endforeach
                        </a>
                        <div class="col-lg-4">
                            <div class="card-artical-a department-card">
                                <div class="card-overlay-artical-a card-overlay-department-a">
                                    <!--=======End-Star-header=========-->
                                    <span class="date-2"> <i class="far fa-calendar-alt"></i> {{ $articl2->created_at->todatestring() }} </span>
                                </div>
                                <img src="{{ asset('storage/articles/' . $articl2->image) }}" alt="">
                                <h1><a href="{{url('details/'.$articl2->id)}}"> {{strip_tags(Str::words($articl2->description,10))}}
                                    </a></h1>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-lg-12">
                        <img src="../img/ADS 7.png" alt="">
                    </div>
                    @foreach ($internationalArticles as $articl3)
                    <div class=" parent">

                        <a href="department.html" class="a-parent"> <img src="{{ asset('storage/articles/' . $articl3->image) }}" alt="">
                            @foreach ($articl3->categories as $category)
                            {{ $category->name }}
                        @endforeach
                        </a>
                        <div class="col-lg-4">
                            <div class="card-artical-a department-card">
                                <div class="card-overlay-artical-a card-overlay-department-a">
                                    <!--=======End-Star-header=========-->
                                    <span class="date-2"> <i class="far fa-calendar-alt"></i> {{ $articl3->created_at->todatestring() }} </span>
                                </div>
                                <img src="{{ asset('storage/articles/' . $articl3->image) }}" alt="">
                                <h1><a href="{{url('details/'.$articl3->id)}}">  {{strip_tags(Str::words($articl2->description,10))}} </a>
                                    </a></h1>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 artical-a-col-lg">
                <div class="row">
                    <img class="ads-s" src="../img/ADS 5.png" alt="">
                    <div class="col-lg-12">
                        <h1>مواضيع شائعة</h1>
                    </div>
                    <div class="col-lg-12">
                        @foreach ($internationalArticles as $internationalArticle)
                            <div class="card-left-artical ">
                                <img src="{{ asset('storage/articles/' . $internationalArticle->image) }}" alt="">
                                <a href="{{url('details/'.$internationalArticle->id)}}">
                                    <h3>{{ $internationalArticle->name }}</h3>
                                </a>
                                <p> {{ strip_tags(Str::words($internationalArticle->description,10)) }}</p>
                            </div>
                        @endforeach
                        <img class="ads-s" src="../img/ADS 5.png" alt="">


                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
