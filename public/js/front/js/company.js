var infoPathCount = 0;
function col02ImgImgResize() {
    var col02Width = $('.col02 .img').css('width');
    console.log(col02Width);
    var col02Height = $('.col02').css('height');
    console.log(col02Height);
    if(parseInt(col02Height) > 290)
        col02Height = parseInt(col02Height) - 90;
    else
        col02Height = parseInt(col02Height) - 70;
    console.log(col02Height);
    $('.col02 .img img').css('height', col02Height+ 'px');
}

$(document).ready(function() {
    var infoPathLen = $('.infoPath').length;
    setInterval(function() {
        if(infoPathLen == 0)
            return;

        $('.infoPathImg').fadeOut(function() {
            $('.infoPathImg').attr('src', $($('.infoPath')[infoPathCount]).val());
            $('.infoPathImg').fadeIn();
        });
        
        ++infoPathCount;
        if(infoPathCount >= infoPathLen)
            infoPathCount = 0;
    }, 3000);

    col02ImgImgResize();
    $(window).resize(function () {
        col02ImgImgResize();
    });
});
