$(document).ready(function() {
    $('.infoMode').on('change', function() {
        var infoNum = $(this).attr('infoNum');
        var infoMode = $(this).val();
        if(infoMode == 1) {
            $("[name=infoPath"+infoNum+"]").show();
            $("[name=infoVideo"+infoNum+"]").hide();
        } else {
            $("[name=infoPath"+infoNum+"]").hide();
            $("[name=infoVideo"+infoNum+"]").show();
        }
    });

    $('.infoMode').trigger('change');

    $('.frontMode').on('change', function() {
        var frontMode = $(this).val();
        switch(frontMode) {
            case '1':
                $('.frontModePic').attr('src', '/images/tami-v3/bg005.jpg');
                break;
            case '2':
                $('.frontModePic').attr('src', '/images/tami-v3/bg004.jpg');
                break;
            case '3':
                $('.frontModePic').attr('src', '/images/tami-v3/bg001.jpg');
                break;
            case '4':
                $('.frontModePic').attr('src', '/images/tami-v3/bg002.jpg');
                break;
            case '5':
                $('.frontModePic').attr('src', '/images/tami-v3/bg006.jpg');
                break;
            case '6':
                $('.frontModePic').attr('src', '/images/tami-v3/bg003.jpg');
                break;
        }
    });

    $('.frontMode').trigger('change');
});
