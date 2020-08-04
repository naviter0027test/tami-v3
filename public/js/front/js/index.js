$(document).ready(function() {
    var mobileBackground = $("[name=mobileBackground]").val();
    console.log(mobileBackground);
    $('.mobile_div').css('background', 'url('+ mobileBackground+ ') center top no-repeat');
    $('.mobile_div').css('background-size', '100% auto');
});
