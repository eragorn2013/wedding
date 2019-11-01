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

$(".not-working-form-input").mask("+7(999)999-99-99");
/*Прилипания карточки фотографа при скролле*/

$(window).on('scroll', function(){
    if($(this).width() > 660){
        var scrollTop=$(this).scrollTop();    
        var elTop=$("#card-all").offset().top;   
        var fixed=false; 
        if(scrollTop >= elTop){
            $(".card-all-right-item").addClass("fixed");
            $(".card-all-right-item").removeClass("absolute");
            fixed=true;
        }
        else{
            $(".card-all-right-item").removeClass("fixed");
            $(".card-all-right-item").removeClass("absolute");
            fixed=false;
        }
        if(fixed){        
            var elHeight=$('.card-all-right').height();
            var scrollAndEl=(Number(scrollTop)+Number($(".card-all-right-item").innerHeight()))-Number(elTop);
            if(scrollAndEl >= elHeight){            
               $(".card-all-right-item").removeClass("fixed");           
               $(".card-all-right-item").addClass("absolute");          
            }          
        }
    }    
});

/*Добавить в избранное*/

$(".card-all-right-item-favorite").on('click', function(){
    if(!($(".card-all-right-item-favorite-icon", this).hasClass("active"))) $(".card-all-right-item-favorite-icon", this).addClass('active');
    else $(".card-all-right-item-favorite-icon", this).removeClass('active');
    return false;
});

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

$('.portfolio-wrap').lightGallery();

/*Открываем видео*/

/*$(".useful-video-item").on('click', function(){
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
});*/

/*Автокомплит городов*/

$(".header-logo-link-city").kladr({
    type: $.kladr.type.city
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
$(".card-slide-arrow.next").on('click', function(){
    owl.trigger('next.owl.carousel');
});
$(".card-slide-arrow.prev").on('click', function(){
    owl.trigger('prev.owl.carousel');
});

/*Карусель с фотографами*/

/*var owl2=$(".owl-carousel-2");
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
});*/

/*Карусель с фотографами*/

/*var owl3=$(".owl-carousel-3");
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
});*/