$(document).ready(function() {
    $(".article:has(.thumb)").addClass("hasimg");
    $(".article:contains(\u005b\u89c6\u9891\u005d)").addClass("hasvid");
    $(".content a").attr("target","_blank");

    $("#menu").on("click",function() {
        $("#nav").toggle(300);
    });
});