$(document).ready(function() {
    $('.productRemove').on('click', function() {
        if(confirm('確定刪除?') == false) {
            console.log('no');
            return false;
        }
    });
});
