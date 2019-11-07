/*Читать полностью*/

$(".blocks-item-wrap-more").on('click', function(){
    $(".blocks-item.third .blocks-item-p").addClass("more");
    $(this).remove();
    return false;
});

/*Модальное окно "Этот раздел в разработке"*/

$(".not-working").on('click', function(){
   if($("#modal-not-working").is(":hidden"))
        $("#modal-not-working").fadeIn(200);   
   return false;
});
$("#modal-not-working, .not-working-close").on('click', function(){
    if($(this).is(":visible"))
        $("#modal-not-working").fadeOut(200);    
});
$(".not-working-content").on('click', function(e){e.stopPropagation()});

$(".not-working-form").on('submit', function(){
    var phone=$(".not-working-form-input", this).val();
    if(phone == ""){
        $(".not-working-form-input", this).css("border", "1px solid #b32c32");
        return false;
    }    
});
/*Маска для ввода номера телефона*/

$(".not-working-form-input, .modal-input-form-field-input.phone, .modal-reg-form-field-input.phone").mask("+7(999)999-99-99", {completed:function(){
    if($(".modal-reg-form-field-input.phone").hasClass("error")){
        $(".modal-reg-form-field-error.phone").text("");
        $(".modal-reg-form-field-input.phone").removeClass("error");
    }  
    if($(".modal-input-form-field-input.phone").hasClass("error")){
        $(".modal-input-form-field-input.phone").removeClass("error");
    }  
}});
/* Работа с мобильным меню */

$(".m-menu").on('click', function(){
    $(".nav-list").stop().slideToggle(300);
});
$(window).on('resize', function(){
    if($(this).width() > 640){
        $(".nav-list").removeAttr('style');
    }
});

/*lightgallery*/

$('.best-wrap').lightGallery();

/*Открываем видео*/

$(".useful-video-item").on('click', function(){
    var idVideo=$(this).attr("data-id");
    var url="https://www.youtube.com/embed/"+idVideo;
    $(".modal-video-iframe").attr("src", url);
    $("#modal-video").fadeIn(300);
});

$(".modal-video-close, #modal-video").on("click", function(){
    $("#modal-video").fadeOut(300, function(){
        $(".modal-video-iframe").removeAttr("src");
    });
});

$(".modal-video-content").on('click', function(e){
    e.stopPropagation();
});

/*Автокомплит городов*/

$(".header-logo-link-city").kladr({
    type: $.kladr.type.city,
    select: function(obj){
        console.log("После выбора города тут можно делать редирект");
    }
});
$(".header-logo-link-city-icon").on('click', function(){
    $(this).prev(".header-logo-link-city").val("");
    $(this).prev(".header-logo-link-city").focus();
});
$(".header-logo-link-city").on("input", function(){
    console.log("Пользователь вводит город вручную (без cladr) тут должна быть проверка на совпадения, если город совпал, то делаем редирект");
});
$(".header-logo-link-city").on('click', function(){    
    $(this).keyup();
});

/*Карусель с акциями*/

var owl=$(".owl-carousel");
owl.owlCarousel({                      
    margin:15,
    nav:false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    loop: true,
    responsive:{    
        0:{items:1}         
    }
});
$(".discounts-container-arrow.next").on('click', function(){
	owl.trigger('next.owl.carousel');
});
$(".discounts-container-arrow.prev").on('click', function(){
	owl.trigger('prev.owl.carousel');
});

/*Карусель с фотографами*/

var owl2=$(".owl-carousel-2");
owl2.owlCarousel({                      
    margin:15,
    nav:false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    loop: true,
    responsive:{
        0:{items:1},
        490:{items:2},
        660:{items:3},            
        920:{items:4},            
        1190:{items:6}            
    }
});
$(".top-container-arrow.next").on('click', function(){
    owl2.trigger('next.owl.carousel');
});
$(".top-container-arrow.prev").on('click', function(){
    owl2.trigger('prev.owl.carousel');
});

if($(window).width() <= 660){
    var owl4=$(".owl-carousel-4, .owl-carousel-5, .owl-carousel-6, .owl-carousel-7, .owl-carousel-8, .owl-carousel-9");
    owl4.owlCarousel({                      
        margin:15,
        nav:false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        loop: true,
        responsive:{
            0:{items:1}                       
        }
    });   
}

$(window).on('resize', function(){
    if($(window).width() > 660){
       
    }
    else{
        var owl4=$(".owl-carousel-4, .owl-carousel-5, .owl-carousel-6, .owl-carousel-7, .owl-carousel-8, .owl-carousel-9");
        owl4.owlCarousel({                      
            margin:15,
            nav:false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            loop: true,
            responsive:{
                0:{items:1}                       
            }
        });  
    }
});

/*Карусель с фотографами*/

var owl3=$(".owl-carousel-3");
owl3.owlCarousel({                      
    margin:15,
    nav:false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    loop: true,
    responsive:{
        0:{items:1},  
        640:{items:2},            
        920:{items:3},            
        1190:{items:4}            
    }
});
$(".top-platforms-container-arrow.next").on('click', function(){
    owl3.trigger('next.owl.carousel');
});
$(".top-platforms-container-arrow.prev").on('click', function(){
    owl3.trigger('prev.owl.carousel');
});


/*Модальное окно "Регистрация"*/

$(".open-reg").on('click', function(){    
    if($("#modal-reg").is(":hidden")){
        $("#modal-reg").stop().fadeIn(200, function(){
            $(".modal-reg-content").stop().slideDown(200);
        });
    }
    return false;
});
$("#modal-reg, .modal-reg-close").on("click", function(){
    $(".modal-reg-content").stop().slideUp(200, function(){
        $("#modal-reg").stop().fadeOut(200, function(){
            
        });
    });
});
$(".modal-reg-content").on("click", function(e){
    e.stopPropagation();
});

$(".modal-reg-form").on('submit', function(){
    var name=$(".modal-reg-form-field-input.name", this).val();
    var phone=$(".modal-reg-form-field-input.phone", this).val();
    var email=$(".modal-reg-form-field-input.email", this).val();
    var pass=$(".modal-reg-form-field-input.pass", this).val();
    var passRepeat=$(".modal-reg-form-field-input.pass-repeat", this).val();
    var check=false;
    if($(".modal-reg-form-field-check-input").is(":checked")) check=true;
    var regEmail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var error=false;

    if(!name){
        $(".modal-reg-form-field-error.name", this).text("Введите имя");
        $(".modal-reg-form-field-input.name", this).addClass("error");
        error=true;
    }
    else{
        $(".modal-reg-form-field-error.name", this).text("");
        $(".modal-reg-form-field-input.name", this).removeClass("error");
    }
    if(!phone){
        $(".modal-reg-form-field-error.phone", this).text("Введите номер телефона");
        $(".modal-reg-form-field-input.phone", this).addClass("error");
        error=true;
    }
    else{
        $(".modal-reg-form-field-error.phone", this).text("");
        $(".modal-reg-form-field-input.phone", this).removeClass("error");
    }   
    if(regEmail.test(email) == false && email != '') {
        $(".modal-reg-form-field-error.email", this).text("Введите корректный email");
        $(".modal-reg-form-field-input.email", this).addClass("error");
        error=true;
    }
    else if(regEmail.test(email) == false && !email){
        $(".modal-reg-form-field-error.email", this).text("Введите email");
        $(".modal-reg-form-field-input.email", this).addClass("error");
        error=true;
    }
    else{
        $(".modal-reg-form-field-error.email", this).text("");
        $(".modal-reg-form-field-input.email", this).removeClass("error");
    }
    if(!pass){
        $(".modal-reg-form-field-error.pass", this).text("Придумайте пароль");
        $(".modal-reg-form-field-input.pass", this).addClass("error");
        error=true;
    }
    else{
        $(".modal-reg-form-field-error.pass", this).text("");
        $(".modal-reg-form-field-input.pass", this).removeClass("error");        
        if(!passRepeat || (passRepeat !== pass)){
            $(".modal-reg-form-field-error.pass-repeat", this).text("Пароли не совпадают");
            $(".modal-reg-form-field-input.pass-repeat", this).addClass("error");
            error=true;
        }
        else{
            $(".modal-reg-form-field-error.pass-repeat", this).text("");
            $(".modal-reg-form-field-input.pass-repeat", this).removeClass("error");
        }
    }
    if(!check){
        $(".modal-reg-form-field-error.check", this).text("Подтвердите согласие");
        $(".modal-reg-form-field-input.check", this).addClass("error");
        error=true;
    }
    else{
        $(".modal-reg-form-field-error.check", this).text("");
            $(".modal-reg-form-field-input.check", this).removeClass("error");
    }   

    $(".modal-reg-form-field-input.name", this).on("input", function(){    
        if(!$(this).val()){
            $(".modal-reg-form-field-error.name").text("Введите имя");
            $(this).addClass("error"); 
            error=true;       
        }
        else{
            $(".modal-reg-form-field-error.name").text("");
            $(this).removeClass("error");
        }
    });

    $(".modal-reg-form-field-input.email", this).on("input", function(){    
        if(regEmail.test($(this).val()) == false && $(this).val() != '') {
            $(".modal-reg-form-field-error.email").text("Введите корректный email");
            $(this).addClass("error");
            error=true;
        }
        else if(regEmail.test($(this).val()) == false && !$(this).val()){
            $(".modal-reg-form-field-error.email").text("Введите email");
            $(this).addClass("error");
            error=true;
        }
        else{
            $(".modal-reg-form-field-error.email").text("");
            $(this).removeClass("error");
        }
    });

    $(".modal-reg-form-field-input.pass, .modal-reg-form-field-input.pass-repeat", this).on("input", function(){        
        if(!($(".modal-reg-form-field-input.pass").val())){
            $(".modal-reg-form-field-error.pass").text("Придумайте пароль");
            $(".modal-reg-form-field-input.pass").addClass("error");
            error=true;
        }
        else{

            $(".modal-reg-form-field-error.pass").text("");
            $(".modal-reg-form-field-input.pass").removeClass("error");        
            if(!($(".modal-reg-form-field-input.pass-repeat").val()) || ($(".modal-reg-form-field-input.pass-repeat").val() !== $(".modal-reg-form-field-input.pass").val())){
                $(".modal-reg-form-field-error.pass-repeat").text("Пароли не совпадают");
                $(".modal-reg-form-field-input.pass-repeat").addClass("error");
                error=true;               
            }
            else{

                $(".modal-reg-form-field-error.pass-repeat").text("");
                $(".modal-reg-form-field-input.pass-repeat").removeClass("error");
            }
        }
    });

    $(".modal-reg-form-field-check-input").on('change', function(){        
        if(!($(this).is(':checked'))){
            $(".modal-reg-form-field-error.check").text("Подтвердите согласие");
            $(this).addClass("error");
            error=true;
        }
        else{
            $(".modal-reg-form-field-error.check").text("");
            $(this).removeClass("error");
        }
    });

    if(error) return false;

    $(".modal-reg-form-loader").show();
    $(".modal-reg-form-error-server").text("")
    $.post('registration.php', {
        "name": name,
        "phone": phone,
        "email": email,
        "pass": pass,
        "passRepeat": passRepeat,
        "check": check
    }, function(data){
        data=JSON.parse(data);        
        if(data.error==true){            
           $(".modal-reg-form-error-server").text(data.message);
           $(".modal-reg-form-loader").hide(); 
           return false;
        }
        else{
            $(".modal-reg-form").css({
                "display": "flex",
                "justify-content": "center",
                "align-items": "center"
            });
            $(".modal-reg-form").html("<span class='modal-reg-form-ok'>"+data.message+"</span>");
            $(".modal-reg-form-loader").hide(); 
        }


    });

    return false;
    
});



/*Модальное окно "Вход"*/

$(".header-auth-link.input").on('click', function(){    
    if($("#modal-input").is(":hidden")){
        $("#modal-input").stop().fadeIn(200, function(){
            $(".modal-input-content").stop().slideDown(200);
        });
    }
    return false;
});

$(".modal-input-form").on('submit', function(){
    var login=$(".modal-input-form-field-input.phone").val();
    var pass=$(".modal-input-form-field-input.pass").val();
    var error=false;
    if(!login){
       $(".modal-input-form-field-input.phone").addClass("error"); 
       error=true;
    }
    if(!pass){
        $(".modal-input-form-field-input.pass").addClass("error");
        error=true; 
    }
    if(error) return false;   
});
$("#modal-input, .modal-input-close").on("click", function(){
    $(".modal-input-content").stop().slideUp(200, function(){
        $("#modal-input").stop().fadeOut(200, function(){
            $(".modal-input-form-field-input.phone").removeClass("error").val("");
            $(".modal-input-form-field-input.pass").removeClass("error").val("");
        });
    });
});
$(".modal-input-content").on("click", function(e){
    e.stopPropagation();
});