// acive nav-item in navbar
$(document).ready(function () {
    var url = window.location;
    $('#topNavbar .nav-item a[href="'+ url +'"]').parent().addClass('active');
    $('#topNavbar .nav-item a').filter(function() {
        return $(this).attr('href') == url;
    }).parent().addClass('active');
});
$(document).ready(function() {
    $(".fa-search").click(function() {
        $(".icon").toggleClass("active");
        $("input[type='text']").toggleClass("active");
    });
});
