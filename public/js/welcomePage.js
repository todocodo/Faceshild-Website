// Toggle animation on click show the navBar

$(document).ready(function() {

    $('#sidebarCollapse').on('click', function() {
        $('#sidebar-wrapper').toggleClass('activeNav');
    });

});

// Hide the navBar when scrolling the page

var isActive = document.getElementsByClassName('activeNav');

$(document).ready(function() {
    $(function() {
        $(window).scroll(function() {

            if ($(this).scrollTop() > 100 && (isActive.length <= 0)) {
                $('.navscroll').toggleClass('activeNav');
            }
        });
    });
});