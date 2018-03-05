$(document).ready(function () {
    
    console.log('lalala');
    
    /**
     * Skill bar expand animation
     */
    $('.skillbar').each(function () {
        $(this).find('.skillbar-bar').animate({
            width: $(this).attr('data-percent'),            
        }, 4000);
    });    
});