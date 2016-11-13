/**
 * Created by Eng-Alaa on 5/28/2016.
 */
!function (e) {


    var n = new ScrollMagic.Controller, r = ["#slide01", "#slide02", "#slide03"];
    Modernizr.touch || (t.forEach(function (e, r) {
        {
            var t = r + 1;
            new ScrollMagic.Scene({triggerElement: e, offset: -180}).setClassToggle("#slide0" + t, "is-active").addTo(n)
        }
    }), c.forEach(function (r, t) {
        {
            var c = e(r).attr("id");
            new ScrollMagic.Scene({
                triggerElement: r,
                offset: -180
            }).setClassToggle("#" + c, "is-active").on("enter", function (n) {
            }).addTo(n)
        }
    }), r.forEach(function (r, t) {
        new ScrollMagic.Scene({triggerElement: r}).on("enter", function (n) {
        }).addTo(n)
    }))
}(jQuery);