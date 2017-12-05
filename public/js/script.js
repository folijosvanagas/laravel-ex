$( ".thumb gem" ).hover(
    function() {
        // Fade cat icon in on hover, at 200ms to opacity 1
        $(this).find('.cat-icon').fadeTo(200, 1);
    }, function() {
        // Fade cat icon out when hover leaves, at 200ms to opacity 0
        $(this).find('.cat-icon').fadeTo(200, 0);
    }
);/**
 * Created by Augustinas on 7/8/2017.
 */
