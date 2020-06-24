$(document).ready(function() {
    var contentHeight = $('.content').css('height');
    var contentMarginTop = $('.content').css('margin-top');
    var leftHeight = $('.admin-menu').css('height');
    if(parseInt(contentHeight) > parseInt(leftHeight)) {
        leftHeight = parseInt(contentHeight) + parseInt(contentMarginTop);
        $('.admin-menu').css('height', leftHeight+ "px");
    }
});
