$(document).ready(function () {
    $('.buttons button').click(function () {
        $('#info').empty();
        $('#info').html($("#" + $(this).data('link')).html());
    });
});