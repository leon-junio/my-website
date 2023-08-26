$(function() {
    device();
    $(".main").onepage_scroll({
        sectionContainer: "section", 
        easing: "ease-out", 
        animationTime: 500,
        pagination: true, 
        updateURL: true,
        beforeMove: function(index) {},
        afterMove: function(index) {},
        loop: true, 
        keyboard: true,
        responsiveFallback: 900, 
        direction: "horizontal" 
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
