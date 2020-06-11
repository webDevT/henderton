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

$('.slider').slick({
prevArrow: $('.prev'),
nextArrow: $('.next'),
slidesToShow: 2,
responsive: [
{
    breakpoint: 992,
    settings: {
    slidesToShow: 1,
   
    }
  },
]
});


});

$(function(){
$(elements).lazyLoadXT();



});

$.lazyLoadXT.onload.addClass = "animated fadeIn";


$(document).ready(function(){
            /*ПРОВЕРЯЕМ НАЖАТА ЛИ КНОПКА ОТПРАВКИ*/
            $('#btn_submit').click(function(){
                // собираем данные с формы
               var user_name    = $('#name').val();
                var company    = $('#company').val();
                var user_email   = $('#email').val();
                var text_comment = $('#text_comment').val();
                var howhear    = $('#how-hear').val();
                var tel1    = $('#tel1').val();
                var tel2    = $('#tel2').val();
                var tel3    = $('#tel3').val();
                // отправляем данные
                $.ajax({
                    url: "send.php", // куда отправляем
                    type: "post", // метод передачи
                    data: { // что отправляем
                        "name":    user_name,
                        "email":   user_email,
                        "text_comment": text_comment,
                        "company": company,
                        "how-hear": howhear,
                        "tel1": tel1,
                        "tel2": tel2,
                        "tel3": tel3

                    },
                    error:function(){
                        $("#erconts").html("Error sending!");
                        $("#erconts").css("color", "red");
                }, 
                    /* если произойдет ошибка в элементе с id erconts выведится сообщение*/                 
                    beforeSend: function() {                     
                        $("#erconts").html("Sending..."); 
                                        
                    },                 
                    success: function(result){                     
                        /* В случае удачной обработки и отправки выполнится следующий код*/                     
                        $('#erconts').html(result);  
                        $('#erconts').css('color', 'green');                   
                                       
                    }  
                });
            });
        });



