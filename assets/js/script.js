$(function() {

	$('.flexslider').flexslider();
    $(window).scroll(function () {
        var scroll_pos = $(this).scrollTop();
        if (scroll_pos > 200) {
            $(".navbar").css('background', '#eee'); //*Transparente
        } else {
            $(".navbar").css('background', 'transparent'); //*blanco
        }          
    });
    if(type = 'supermarket') {
        $('body').css('color', '#065473');
    }else if (type = 'park') {
        $('body').css('color', '#2C0216');
    }else if (type = 'night_club') {
        $('body').css('color', '#073C40');
    }else if (type = 'museum') {
        $('body').css('color', '#0C060D');
    }else if (type = 'shopping_mall') {
        $('body').css('color', '#1E0F2F');
    }else if (type = 'store') {
        $('body').css('color', '#3C2B3E');
    }else if (type = 'cafe') {
        $('body').css('color', '#400822');
    }else if (type = 'restaurant') {
        $('body').css('color', '#3C2B3E');
    }else if (type = 'bar') {
        $('body').css('color', '#071C1A');
    }
    // $(window).load(function() {
       
    // });

    // $('li a').on({
    // 	mouseenter: function(){
    // 		$(this).removeClass('gray');
    // 	},
    // 	mouseleave: function(){
    // 		$(this).addClass('gray');
    // 	}});

	
});