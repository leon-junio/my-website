$(function() {
    device();
    $(".main").onepage_scroll({
        sectionContainer: "section", // sectionContainer accepts any kind of selector in case you don't want to use section
        easing: "ease", // Easing options accepts the CSS3 easing animation such "ease", "linear", "ease-in",
        // "ease-out", "ease-in-out", or even cubic bezier value such as "cubic-bezier(0.175, 0.885, 0.420, 1.310)"
        animationTime: 1000, // AnimationTime let you define how long each section takes to animate
        pagination: true, // You can either show or hide the pagination. Toggle true for show, false for hide.
        updateURL: false, // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
        beforeMove: function(index) {}, // This option accepts a callback function. The function will be called before the page moves.
        afterMove: function(index) {}, // This option accepts a callback function. The function will be called after the page moves.
        loop: false, // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
        keyboard: true, // You can activate the keyboard controls
        responsiveFallback: 1000, // You can fallback to normal page scroll by defining the width of the browser in which
        // you want the responsive fallback to be triggered. For example, set this to 600 and whenever
        // the browser's width is less than 600, the fallback will kick in.
        direction: "vertical" // You can now define the direction of the One Page Scroll animation. Options available are "vertical" and "horizontal". The default value is "vertical".
    });
    lightbox.option({
        'resizeDuration': 200
    });
});


var checkin = true;

function device() {
    if (screen.width < 640 || screen.height < 480) {
        setAnimation();
    } else if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        setAnimation();
    } else if (navigator.userAgentData != undefined && navigator.userAgentData.mobile) {
        setAnimation();
    }
}

function setAnimation() {
    checkin = false;
    var a = "anim",
        b;
    for (var i = 1; i <= 6; i++) {
        b = a + i;
        var an = document.getElementById(b);
        an.style.opacity = 100;
    }
    var ab = "ic",
        bb;
    for (var ix = 1; ix <= 6; ix++) {
        bb = ab + ix;
        var ant = document.getElementById(bb);
        ant.style.opacity = 0;
    }
}

function raiane(a, b) {
    if (checkin) {
        var i = document.getElementById(a);
        var ix = document.getElementById(b);
        i.style.opacity = 100;
        ix.style.opacity = 0;
    }
}

function leon(a, b) {
    if (checkin) {
        var i = document.getElementById(a);
        var ix = document.getElementById(b);
        i.style.opacity = 0;
        ix.style.opacity = 100;
    }
}