$("#image-toggle").click(function () {

    var buttonText = $(this).text();

    if (buttonText.startsWith("HIDE IMAGES")) {
        $("img").toggle("slow");
        $(".column-example").removeClass("col-md-4");
        $(".column-example").addClass("col-md-12");
        $(this).html("SHOW IMAGES");
    } else {
        $(".column-example").removeClass("col-md-4");
        $(".column-example").addClass("col-md-12");
        $("img").toggle("slow");
        $(this).html("HIDE IMAGES");
    };
});