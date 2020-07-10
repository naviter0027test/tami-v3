var infoPathCount = 0;
$(document).ready(function() {
    var infoPathLen = $('.infoPath').length;
    $('.infoPathImg').css('width', '331px');
    $('.infoPathImg').css('height', '162px');
    setInterval(function() {
        $('.infoPathImg').fadeOut(function() {
            $('.infoPathImg').attr('src', $($('.infoPath')[infoPathCount]).val());
            $('.infoPathImg').fadeIn();
        });
        
        ++infoPathCount;
        if(infoPathCount >= infoPathLen)
            infoPathCount = 0;
    }, 3000);
});
