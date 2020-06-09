$(function(){

// ------start sticky header------

$(window).scroll(function() {
if ($(this).scrollTop() > 1){
$('.header').addClass("sticky");
}
else{
$('.header').removeClass("sticky");
}
});

//-------end sticky header--------

//-------start mobil menu----------

$('.menu__btn').click(function(){
		$(this).toggleClass('active');
		$('.menu ul').toggleClass('active');
		$('.header').toggleClass('active');

	})

//-------end mobil menu------------

});

$(function(){
$(elements).lazyLoadXT();


});

$.lazyLoadXT.onload.addClass = "animated fadeIn";


