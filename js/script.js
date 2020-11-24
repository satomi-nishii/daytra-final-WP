jQuery(function($) {

	// drawer.js利用宣言
    $('.drawer').drawer();

    // wow
    new WOW().init();

    // formの入力確認
    let $submit = $('#js-submit')
    $('#js-form input, #js-form textarea').on('change', function() {
        if (
            $('#js-form input[type="text"]').val() !== "" &&
            $('#js-form input[type="email"]').val() !== ""
        ){
            // 全て入力された時
            $submit.prop('disabled', false)
            $submit.addClass('-active')
        } else {
            // 全て入力されていない時
            $submit.prop('disabled', true)
            $submit.removeClass('-active')
        }
    });
    
});