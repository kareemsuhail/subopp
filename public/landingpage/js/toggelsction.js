$(document).ready(function(){
    // Init ScrollMagic
    var controller = new ScrollMagic.Controller();
    // pin the intro
    var pinIntroScene = new ScrollMagic.Scene({
        triggerElement: '.intro',
        triggerHook:0,
    })
        .setPin('.intro', {pushFollowers: false})
        .addTo(controller);
});