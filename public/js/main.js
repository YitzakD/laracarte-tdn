/**
 * User: Yitzak DEKPEMOU
 */

$(document).ready(function(){

    // MAIN

    /* About scrollers -> qui affiche les scrollers adaptés */
    $("body").niceScroll({styler:"fb", cursorcolor:"#B6B6B4", cursorborder:"#B6B6B4", zindex:"700", cursorborderradius:"3px"});




    /* About Flash Notifs -> Pour la fermeture de pop-ups des alertes */
    $(".dot-close").click(function() {

        p = $(this).parent("#fp");
        pop = p.parent("#pop");
        pop.css("right", "-3000px");

        return false;

    });


    /* About Elastic Area -> A propos des textareas qui ont l'ID 'elasticarea' */
    $('#elasticarea').elastic().css("height","80px");
    jQuery('#elasticarea').trigger('update');
    
    // END MAIN


});
