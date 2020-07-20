var nowProductNum = 0;
var maxProductNum = 0;
$(document).ready(function() {
    maxProductNum = $('.maxProductNum').val();

    var pdfHref = $('.pdf'+nowProductNum).val();
    $('.btn_cate').attr('href', '/product'+pdfHref);

    $('#locationHref').val(location.href);
    $('#locationHref').css('position', 'absolute');
    $('#locationHref').css('left', '-99999px');
    $('.btn_share').on('click', function() {
        var copyText = document.getElementById("locationHref");
        copyText.select();
        document.execCommand("copy");
        return false;
    });

    $('.owl-prev').on('click', function() {
        if(nowProductNum <= 0)
            nowProductNum = maxProductNum - 1;
        else 
            --nowProductNum;
        pdfHref = $('.pdf'+nowProductNum).val();
        if(pdfHref == '')
            $('.btn_cate').attr('href', '#');
        else
            $('.btn_cate').attr('href', '/product'+pdfHref);
        return false;
    });

    $('.owl-next').on('click', function() {
        if(nowProductNum >= maxProductNum)
            nowProductNum = 0;
        else 
            ++nowProductNum;
        pdfHref = $('.pdf'+nowProductNum).val();
        if(pdfHref == '' || typeof(pdfHref) == 'undefined')
            $('.btn_cate').attr('href', '#');
        else
            $('.btn_cate').attr('href', '/product'+pdfHref);
        return false;
    });

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
});
