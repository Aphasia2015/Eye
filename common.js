$(document).ready(function() {
    $(".article:has(.thumb)").addClass("hasimg");
    $(".article:contains(\u005b\u89c6\u9891\u005d)").addClass("hasvid");
    $(".content:has(embed)").addClass("hasplayer");
    $(".content a").attr("target","_blank");
});