$(function() {
    $('.order__form-button').click(function(e){
        e.preventDefault();
        var serializedData = $('#order-form').serialize();
        $.ajax({
            type: 'post',
            url: '/index.php',
            data: serializedData,
            success: function(response) {
                return false;
            }
        });
    });
})