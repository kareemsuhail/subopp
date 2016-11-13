

        @foreach ($how_it_dos as $hows )
    <section class="parallex1">
        <div class="container  ">
            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-4 works">
                    <div class="works-content">
                        <h3 class="bold-font" data-aos="zoom-in-left" data-aos-offset="-100"
                            data-aos-easing="ease-in-sine" data-aos-delay="200">
                            <i class="fa fa-play-circle-o" aria-hidden="true"></i>
                            {{ $hows->title }}
                        </h3>

                        <p data-aos="zoom-in-left" data-aos-offset="-100" data-aos-easing="ease-in-sine"
                           data-aos-delay="400">
                             {{$hows->short_info}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
        @endforeach