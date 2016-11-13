/**
 * Created by Alaa on 9/18/2016.
 */
$(document).ready(function () {



    $("#gallery").unitegallery(
        {
//gallery height
            gallery_height: 600,
//gallery minimal height when resizing
            gallery_min_height: 300,

//true / false - begin slideshow autoplay on start
            gallery_autoplay: true,

//play interval of the slideshow
            gallery_play_interval: 3000,

//true,false - pause on mouseover when playing slideshow true/false
            gallery_pause_on_mouseover: true,

//set custom background color.
//If not set it will be taken from css.
            gallery_background_color: ""

        }
    );



});


