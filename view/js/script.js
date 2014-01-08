(function($) {
    var $update = $('.update_btn'),
            $containerPopUp = $('.container_popup'),
            $close = $('#close'),
            $inputNombre = $('#input_nombre'),
            $inputEmail = $('#input_email'),
            $inputId = $('#input_id');;

    $update.on('click', function() {
        $containerPopUp.addClass("show");
        var $td = $(this).parent(),
            $tdName = $td.siblings('.td_name').text(),
            $tdEmail = $td.siblings('.td_email').text(),
            $tdId = $td.siblings('.td_id').text();
        $inputEmail.val($tdEmail);   
        $inputNombre.val($tdName);
        $inputId.val($tdId);
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
    
    var str = $("form").serialize(),
            url = 'CRUD/c=index&m=actualizar';
    $.post(url, str, respuesta, 'json');
}
function respuesta(r) {
    console.log(r)


}


