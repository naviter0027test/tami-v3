$(document).ready(function() {
    $('.block_img').on('click', function() {
        var popupId = $(this).attr('data-id');
        setTimeout(function() {
            var listItemHeight = $('#'+ popupId+ ' .list_item').css('height');
            console.log(listItemHeight);
            var popupImgHeight = 100 + parseInt(listItemHeight);
            console.log(popupImgHeight);
            $('.home_div #'+ popupId+ ' img').css('height', popupImgHeight+'px');
        }, 500);
    });
});
