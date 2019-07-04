$(document).ready(function() {
    $('.image').mouseenter(function() {
        $(this).animation({
          height: '+=40px',
          width: '+=40px'
    })

    $('.image').mouseleave(function() {
        $(this).animate({
            height: '=20px', width: '=50px'
        });
    });
    });
   
});
 
$('.image').click(function() {
    $(this).css('background-color', 'blue');
});