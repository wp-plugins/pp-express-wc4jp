jQuery(document).ready(function ($){
    $("#paypal_ec_button_product input").click(function(){
        var wc4jp_action = $(this).data('action');
        $('form.cart').attr( 'action', wc4jp_action );
        $(this).attr('disabled', 'disabled');
        $('form.cart').submit();
        $(".wc4jpOverlay").show();
        return false;
    });
    $(".paypal_checkout_button").click(function(){
        $(".wc4jpOverlay").show();
        return true;
    });
});