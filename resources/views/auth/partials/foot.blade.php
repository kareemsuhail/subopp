



<script src="{{ url('landingpage') }}/js/aos.js"></script>
<script>
    AOS.init({
        offset: 200,
        duration: 1000,
        delay: 100,
    });
</script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA95jwcV2P9_gLiEpEVvbWbLrJpIvuM06Y&callback=myMap"></script>
<script src="{{ url('landingpage') }}/js/jquery.js"></script>
<script>
    $(document).ready(function () {

        // for num counter
        $(document).ready(function ($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });

        // change colot of nav when scroll down
        $(window).scroll(function () { // check if scroll event happened
            if ($(document).scrollTop() > 50) { // check if user scrolled more than 50 from top of the browser window
                $(".navbar-fixed-top").css("background-color", "#010101"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
//
            } else {
                $(".navbar-fixed-top").css("background-color", "transparent"); // if not, change it back to transparent
            }
        });
    });
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

<script src="{{ url('landingpage') }}/js/jquery.counterup.js"></script>

<script src="{{ url('landingpage') }}/js/bootstrap.min.js"></script>
<script src="{{ url('landingpage') }}/js/ScrollMagic.js"></script>
<script src="{{ url('landingpage') }}/js/toggelsction.js"></script>
<script src="{{ url('landingpage') }}/js/Modernizr.js"></script>
<script src="{{ url('landingpage') }}/js/animate-font.js"></script>
