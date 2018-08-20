$(function() {

	 
    $(window).scroll(function () {
        var scroll_pos = $(this).scrollTop();
        if (scroll_pos > 200) {
            $(".navbar").css('background', '#eee'); //*Transparente
        } else {
            $(".navbar").css('background', 'transparent'); //*blanco
        }          
    });

    $(window).load(function() {
        $('.flexslider').flexslider();
    });

    // $('li a').on({
    // 	mouseenter: function(){
    // 		$(this).removeClass('gray');
    // 	},
    // 	mouseleave: function(){
    // 		$(this).addClass('gray');
    // 	}});

	
});