/* fermer la popup */
jQuery(document).ready(function($) {
    $('.popup-close').click(function(){
        $(this).closest('.popup-overlay').hide();
    });
});


