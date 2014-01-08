(function($) {
    var $update = $('.update_btn'),
        $containerPopUp = $('.container_popup');
    
    $update.on('click', function(){
        $containerPopUp.addClass("show");
        //alert($(this).data("id"));
    });
	
})(jQuery);
