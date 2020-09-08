var nowProductNum = 0;
var maxProductNum = 0;
var infoPathCount = 0;
function col02ImgImgResize() {
    var col02Width = $('.col02 .img').css('width');
    console.log(col02Width);
    col02Width = parseInt(col02Width);
    var col02Height = $('.col02').css('height');
    col02Height = col02Width / 2 - 10;
    $('.col02 .img img').css('height', col02Height+ 'px');
}

$(document).ready(function() {
    maxProductNum = $('.maxProductNum').val();

    var pdfHref = $('.pdf'+nowProductNum).val().trim();
    if(pdfHref == '') {
        $('.btn_cate').attr('href', '#');
        $('.btn_cate').removeAttr('target');
    }
    else {
        $('.btn_cate').attr('href', '/product'+pdfHref);
        $('.btn_cate').attr('target', '_blank');
    }

    switch($("meta[name=lan]").attr('content')) {
        case 'en':
            var href = location.protocol+ '//'+ location.host+ location.pathname+ "?lan=en";
            $('#locationHref').val(href);
            break;
        default:
            $('#locationHref').val(location.href);
    }

    $('.contact').submit(function() {
        var productId = $('.product'+nowProductNum).val();
        $('[name=productId]').val(productId);
        var formData = $(this).serialize();
        $.post($(this).attr('action'), formData, function(data) {
            var askSuccess = $('.askSuccess').val();
            var errMsg = $('.errMsg').val();
            var notifyAdm = $('.notifyAdm').val();
            if(data['result'] == true) {
                alert(askSuccess);
                location.href = "/";
            } else {
                alert(errMsg+ ':'+ data['msg'] +' '+ notifyAdm);
            }
        });
        return false;
    });

    var infoPathLen = $('.infoPath').length;
    //$('.logo img').css('width', '11vw');
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

    /*
    col02ImgImgResize();
    $(window).resize(function () {
        col02ImgImgResize();
    });
    */
});
