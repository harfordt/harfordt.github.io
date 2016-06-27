$(document).ready(function () {

    $("#theme-toggle").click(function () {

        var buttonText = $(this).text();
        //light bg theme
        if (buttonText.startsWith("Switch to dark")) {
            $("p").css("color", "white");
            $("td").css("color", "white");
            $("a").css("color", "#FFFFDC");
            $("h1, h2, h3, h4").css("color", "white");
            $("body").css("background-color", "#0D0C0C");
            $(this).html('Switch to light');

            $('nav').removeClass('navbar-default');
            $('nav').addClass('navbar-inverse');

        } else {
            $("p").css("color", "grey");
            $("td").css("color", "black");
            $("a").css("color", "#FFC262");
            $("h1, h2, h3, h4").css("color", "grey");
            $("body").css("background-color", "white");
            $(this).html('Switch to dark');


            $('nav').removeClass('navbar-inverse');
            $('nav').addClass('navbar-default');

        };
    });

    $("#art-sbs-toggle").click(function () {
        $(".sbs-body").toggle("fast")

        var buttonText = $(this).text();

        if (buttonText.startsWith('Show')) {
            $(this).html('Hide section &#8645;');
        } else {
            $(this).html('Show section &#8645;');
        };
    });

    $("#art-ditr-toggle").click(function () {
        $(".ditr-body").toggle("fast")

        var buttonText = $(this).text();

        if (buttonText.startsWith('Show')) {
            $(this).html('Hide section &#8645;');
        } else {
            $(this).html('Show section &#8645;');
        };
    });

    $("#art-meme-toggle").click(function () {
        $(".meme-body").toggle("fast")

        var buttonText = $(this).text();

        if (buttonText.startsWith('Show')) {
            $(this).html('Hide section &#8645;');
        } else {
            $(this).html('Show section &#8645;');
        }

    });

    $('.pgwSlideshow').pgwSlideshow({
        // sets images to max height of 1000px
        maxHeight: '1000',
        autoSlide: false,
    });

});