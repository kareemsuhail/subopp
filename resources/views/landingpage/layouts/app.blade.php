<!DOCTYPE html>
<html lang="en">

<head>
    @include('landingpage.partials.head')
</head>

            <body>
           
                @include('landingpage.menu')
                @include('landingpage.slider')

                    <div style="position: relative">
                        @include('landingpage.feilds')
                        @include('landingpage.parallex1')
                        @include('landingpage.testimonial')
                        @include('landingpage.members')
                        @include('landingpage.parallex2')
                        @include('landingpage.metrial')
                        @include('landingpage.footer')
                    </div>    
                        @include('landingpage.partials.foot')



            </body>
</html>