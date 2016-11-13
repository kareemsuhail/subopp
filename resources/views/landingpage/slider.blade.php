

<section class="intro">
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner  main-silder" role="listbox">

                 @foreach ($sliders as $slider)
            <div class="item @if ($slider->status_id == '1') active @endif  slider-bg " style="background: url({{ asset('uploads/'.$slider->image) }}) ;">
                <div class="overlay text-center">
                    <div class="container" id="slide01">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <h1 class="bold-font slideInUp ">
                                    
                                    {{$slider->title}}
                                </h1>

                                <h2 class="bold-font slideInUp slideInUp2">
                                 
                                    {{$slider->short_info}}

                                </h2>

                                <p class="slideInUp slideInUp3">
                                    {{$slider->description}}
                                </p>
                                <a class="fadein" href="/register">
                                    تسجيل
                                </a>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </div>
            </div>

                @endforeach



        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control hidden-xs hidden-sm" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control hidden-xs hidden-sm" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
</section>