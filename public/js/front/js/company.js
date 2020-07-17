var infoPathCount = 0;
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
});
