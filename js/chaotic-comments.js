jQuery(document).ready(function($) {
    $('.comment').each(function() {
        // Randomize CSS properties
        $(this).css({
            'color': '#' + Math.floor(Math.random()*16777215).toString(16),
            'font-size': Math.floor(Math.random() * (24 - 12 + 1) + 12) + 'px',
            'margin': Math.floor(Math.random() * 20) + 'px',
            'transform': 'rotate(' + Math.floor(Math.random() * 10) + 'deg)'
        });
    });
});
