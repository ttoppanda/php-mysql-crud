(function($) {
    var $update = $('.update_btn'),
            $containerPopUp = $('.container_popup'),
            $close = $('#close'),
            $inputNombre = $('#input_nombre'),
            $inputEmail = $('#input_email');

    $update.on('click', function() {
        $containerPopUp.addClass("show");

        //alert($(this).data("id"));
    });
    $close.on('click', function() {
        $containerPopUp.removeClass("show");
    });

    $("form").submit(function(event) {
        event.preventDefault();
        eventForm();
    });

})(jQuery);
function eventForm() {
    $('#notificaciones').css("display", "block");
    var str = $("form").serialize();
    $.post(this.url, str, this.respuesta, 'json');
}