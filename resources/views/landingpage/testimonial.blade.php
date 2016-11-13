

    <section class="testimonial ">
        <div class="container" align="center">
            <div class="carousel slide carousel-fade" data-ride="carousel" id="testimonial-carousel">
                <!-- Bottom Carousel Indicators -->
                <ol class="carousel-indicators " data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="600"
                    data-aos-easing="ease-in-back" data-aos-offset="0">
                    <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#testimonial-carousel" data-slide-to="1" class=""></li>
                    <li data-target="#testimonial-carousel" data-slide-to="2" class=""></li>
                </ol>

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner">


                                        @foreach ($people_says as $people )


                            <div class="item @if ($people->id == '1') active @endif">
                                <div data-aos="zoom-in" data-aos-duration="1000" data-aos-easing="ease-in-back"
                                     data-aos-delay="200" data-aos-offset="0">
                                    <img src="{{ asset('uploads/'.$people->image) }}" class="img-circle " width="170" height="170">
                                </div>

                                <div class="testimonial-info " data-aos="zoom-in" data-aos-duration="1000"
                                     data-aos-delay="400" data-aos-easing="ease-in-back" data-aos-offset="0">
                                    <h3 class="text-capitalize bold-font">{{$people->title}}</h3>
                                    <small class="text-capitalize light-fonts ">{{$people->jobtitle}}</small>
                                </div>

                                <p class="text-center" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="600"
                                   data-aos-easing="ease-in-back" data-aos-offset="0">
                                    <span class="quote  hidden-xs hidden-sm bold-font">“</span>
                                 
                                        {{$people->say}}

                                    <span class="quote  hidden-xs hidden-sm bold-font">“</span>
                                </p>

                            </div>
                                           @endforeach


                        </div>

                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </section>