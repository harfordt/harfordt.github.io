// Isotope filterable gallery

$(document).ready(function () {
    var $portfolio = $(".portfolio-grid .portfolio-wrap");
    $portfolio.isotope({
        filter: '*',
        animationOptions: {
            duration: 100,
            easing: 'linear',
            queue: false
        }
    });
    $('button').click(function (e) {
        var filterValue = $(this).attr("data-filter");
        $portfolio.isotope({
            filter: filterValue,
            animationOptions: {
                duration: 100,
                easing: 'linear',
                queue: false
            }
        });

    });

    // Parallax effect

    $(window).scroll(function () {
        var $scrollPos = $(window).scrollTop();
        $(".page-header").css("backgroundPosition", "50% -" + $scrollPos / 2 + "px");
    });

});


// Animated hamburger icon

$(document).ready(function () {
    $(".navbar-toggle").on("click", function () {
        $(this).toggleClass("active");
    });
});


// Switches theme from light to dark

$('#theme-toggle').click(function () {


    var buttonText = $(this).text();

    if (buttonText.startsWith("Lights Off")) {
        $('p').css('color', 'White');
        $('nav').css('background-color', 'rgba(32,32,32,0.9)');
        $('nav').css('border-color', 'rgb(66, 66, 66)');
        $('nav a').css('colour', 'rgb(237, 237, 237)');
        $('header').css('border-color', 'rgb(66, 66, 66)');
        $('body').css('background-color', '#363636');
        $('i').css('color', '#ADADAD');
        $('.logobox').css('border-color', 'White');
        $('h2, h3').css('color', 'White');
        $(this).html('Lights On');

    } else {
        $('p').css('color', '#333');
        $('nav').css('background-color', 'rgba(255,255,255,0.9)');
        $('nav').css('border-color', 'rgb(237, 237, 237)');
        $('header').css('border-color', 'white');
        $('body').css('background-color', 'white');
        $('i').css('color', '#676960');
        $('.logobox').css('border-color', '#525252');
        $('.logobox p').css('color', '#525252');
        $('h2, h3').css('color', '#333');
        $('.intro-blurb').css('color', 'rgb(161,161,161)');
        $(this).html('Lights Off');
    };
});