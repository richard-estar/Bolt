$(document).ready(function () {

    if ($(location).attr('pathname') == "home" || $(location).attr('pathname') == "/") {
        $('nav').addClass("fixed-top");
    }
});
