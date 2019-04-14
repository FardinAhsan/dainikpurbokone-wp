(function ($) {
    // newStickr
    $("#newStickr").owlCarousel({
        autoplay: true, //Set AutoPlay to 4 seconds
        loop: true,
        items: 1,
        autoplayHoverPause: true,
        dots: false,
        nav: true,
        navElement: "div",
        navText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ],
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,
                nav: true
            },
            1000: {
                items: 1,
                nav: true,
            }
        }
    });

    $(function () {
        var timer = !1;
        _Ticker = $("#T1").newsTicker();
        _Ticker.on("mouseenter", function () {
            var __self = this;
            timer = setTimeout(function () {
                __self.pauseTicker();
            }, 200);
        });
        _Ticker.on("mouseleave", function () {
            clearTimeout(timer);
            if (!timer) return !1;
            this.startTicker();
        });
    });

    // Gallary
    $('.pgwSlideshow').pgwSlideshow({
        // autoSlide: true,
    });


    //single page related post carousel
    $('#all_related_posts').owlCarousel({
        loop: true,
        margin: 15,
        responsiveClass: true,
        dots: false,
        nav: true,
        navElement: 'div',
        navText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ],
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 2,
                nav: true
            },
            1000: {
                items: 3,
                nav: true,
            }
        }
    })

    //preloader
    $("#preloader").delay(500).fadeOut(500);
    $("#preloader-center").click(function () {
        $("#preloader").fadeOut(500);
    });

    //category
    var allBar = document.querySelectorAll(".category-news-bar");
    allBar.forEach((cv, ind) => cv.setAttribute('id', 'bar_color_' + ind));

    //category
}(jQuery));