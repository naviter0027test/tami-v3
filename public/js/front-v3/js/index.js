$(document).ready(function() {
    $('.animate').on('click', function() {
        setTimeout(function() {
            var listItemHeight = $('.home_div .list_item').css('height');
            var popupImgHeight = 100 + parseInt(listItemHeight);
            console.log(popupImgHeight);
            $('.home_div #popup01 img').css('height', popupImgHeight+'px');
        }, 500);
    });
});
