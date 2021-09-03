@include('frontend.header')
@include('frontend.headerads')
@include('frontend.nav')
@yield('style')
<style>
    #heading-breadcrumbs {
        padding: 2rem 0;
        border-top: none !important;
        border-bottom: none !important;
    }
    .background-pentagon, #heading-breadcrumbs {
        background: url({{asset('img/a1.jpg')}}) center center repeat;
        border-top: 1px solid #999;
        border-bottom: 1px solid #999;
    }
</style>

@yield('section')
<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-8">
                <h1 class="h2" style="margin-left: 25px" >الأسئلة الشائعة</h1>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
</div>
<div id="content">
    <div class="container" style="text-align: right">
        <div class="row bar">
            <div class="col-sm-3 mt-3">
                <!-- PAGES MENU -->

                <div class="banner"><a href="#"><img src="{{asset('img/qa.jpg')}}" alt="sales 2014" class="img-fluid"></a></div>
                <br>
                <div class="banner"><a href="#"><img src="{{asset('img/unnamed.jpg')}}" alt="sales 2014" class="img-fluid"></a></div>
            </div>
            <div class="col-md-9">
                <section>
                    <p class="lead"> </p>
                    <div id="accordion" role="tablist">
                        <div class="card card-primary">
                            <div id="headingOne" role="tab" class="card-header">
                                <h5 class="mb-0 mt-0"><a style="color: white" data-toggle="collapse" href="#collapseOne"
                                                         aria-expanded="true" aria-controls="collapseOne">
                                        {{$questions1->question}}
                                    </a></h5>
                            </div>
                            <div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" class="collapse show">
                                <div class="card-body">
                                    <p>{{strip_tags($questions1->answer)}}</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card card-primary">
                            <div id="headingTwo" role="tab" class="card-header">
                                <h5 class="mb-0 mt-0"><a style="color: white"data-toggle="collapse"
                                                         href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">
                                        {{$questions5->question}}
                                    </a></h5>
                            </div>
                            <div id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" class="collapse">
                                <div class="card-body">
                                    <p>{{strip_tags($questions5->answer)}}</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card card-primary">
                            <div id="headingThree" role="tab" class="card-header">
                                <h5 class="mb-0 mt-0"><a style="color: white"data-toggle="collapse" href="#collapseThree" aria-expanded="false"
                                                         aria-controls="collapseThree" class="collapsed">{{$questions2->question}}</a></h5>
                            </div>
                            <div id="collapseThree" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion" class="collapse">
                                <div class="card-body">
                                    <p>{{strip_tags($questions2->answer)}}</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card card-primary">
                            <div id="headingFour" role="tab" class="card-header">
                                <h5 class="mb-0 mt-0"><a style="color: white"data-toggle="collapse"
                                                         href="#collapseFive" aria-expanded="false"
                                                         aria-controls="collapseFive" class="collapsed">
                                        {{$questions3->question}}</a></h5>
                            </div>
                            <div id="collapseFive" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion" class="collapse">
                                <div class="card-body">
                                    <p>{{strip_tags($questions3->answer)}}</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card card-primary">
                            <div id="headingFive" role="tab" class="card-header">
                                <h5 class="mb-0 mt-0"><a style="color: white"data-toggle="collapse" href="#collapseThree"
                                                         aria-expanded="false" aria-controls="collapseThree" class="collapsed">
                                        {{$questions4->question}}</a></h5>
                            </div>
                            <div id="collapseThree" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion"
                                 class="collapse">
                                <div class="card-body">
                                    <p>{{strip_tags($questions4->answer)}}</p>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <p class="text-muted">
                        في حال كان لديك سؤال لا تتردي في
                        <a href="{{asset('call')}}">التواصل معنا</a>
                         ،نحن هنا لمساعدتك</p>
                </section>
            </div>

        </div>
    </div>
</div>

@include('frontend.footer')
