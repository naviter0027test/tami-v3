$(document).ready(function() {
    $('#mmc').submit(function() {
        var postData = $(this).serialize();
        $.post($(this).attr('action'), postData, function(result) {
            $('#pre').html($('[name=mmc]').val());
            $('[name=mmc]').val('');
            $('#result').html('');
            for(var i = 0;i < result.length;i++) {
                $('#result').append(result[i]+ "<br />");
            }
        });
        return false;
    });
});
