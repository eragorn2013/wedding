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

/*Прилипающий фильтр*/

var filter=$(".best-form-search").clone();
filter.removeClass('best-form-search');
filter.addClass('best-form-search-fixed');
function filterFixed(){
    if($(window).width() > 920){
        var heightTopFilter=$('.best-form-search').offset().top;
        var heightScroll=$(window).scrollTop();
        if(heightScroll >= (heightTopFilter+54)){
            $('body').prepend(filter);
            if($(".best-form-search-fixed").is(":hidden"))
                $(".best-form-search-fixed").slideDown(100).css("display", "flex");        
        }
        else if(heightScroll < (heightTopFilter+54)){   
            if($(".best-form-search-fixed").is(":visible"))
                $(".best-form-search-fixed").slideUp(100);
        }
    }
    else $(".best-form-search-fixed").slideUp(100);
}
filterFixed();
$(document).on('scroll', function(){filterFixed();});
$(window).on('resize', function(){filterFixed();});

/*Добавить в избранное*/

$(".best-content-alternative-item-avata-like").on('click', function(){
    if(!($(".best-content-alternative-item-avata-like-span", this).hasClass("active"))) $(".best-content-alternative-item-avata-like-span", this).addClass('active');
    else $(".best-content-alternative-item-avata-like-span", this).removeClass('active');
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

/*var owl=$(".owl-carousel");
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
});*/

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