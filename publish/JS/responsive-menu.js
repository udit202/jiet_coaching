$(document).ready(function () {
    // When the open button is clicked
    $('#open_btn').click(function () {
        $('.side_nav').addClass('open'); // Add the "open" class to show the side navbar
    });

    // When the close button is clicked
    $('#menu_close_btn').click(function () {
        $('.side_nav').removeClass('open'); // Remove the "open" class to hide the side navbar
    });
});