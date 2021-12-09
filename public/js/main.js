if(window.innerWidth > 992){
    $('.dropdown__parent').on('mouseover', function() {
        $(this).children().fadeIn("fast");
    });
    $('.dropdown__parent').on('mouseleave', function() {
        $(this).children().fadeOut();
    })
    $('.dropdown .btn').on('mouseover', function(){
        $(this).next().fadeIn("slow");
    })
    $('.dropdown .btn').on('mouseleave', function(){
        $(this).next().fadeOut();
    })
} else {
    $('.dropdown__parent').on('click', function() {
        $(this).children().fadeToggle();
    });
    $('.dropdown .btn').on('click', function(){
        $(this).next().fadeToggle();
    })
}
window.addEventListener('load',function(){
    // document.querySelector('.dropdown__parent').addEventListener('mouseover', function () {
    //     document.querySelector('.dropdown__menu').classList.add('active');
    // });
    // document.querySelector('.dropdown__menu').addEventListener('mouseover', function () {
    //     document.querySelector('.dropdown__menu').classList.add('active');
    // })
    // document.querySelector('.dropdown__parent').addEventListener('mouseleave', function () {
    //     document.querySelector('.dropdown__menu').classList.remove('active');
    // });
    // document.querySelector('.dropdown__menu').addEventListener('mouseleave', function () {
    //     document.querySelector('.dropdown__menu').classList.remove('active');
    // });
    document.querySelector('.menu__btn').addEventListener('click', function () {
        document.querySelector('.header__menu').classList.add('active')
    });
    document.querySelector('.menu__close').addEventListener('click', function () {
        document.querySelector('.header__menu').classList.remove('active')
    })
    // Language dropdown
    // let btnClickLang = document.querySelector('.btn__lang');
    // let btnClickWeather = document.querySelector('.weather-dropdown-btn');
    // let btnClickMoney = document.querySelector('.money-btn');
    // let langMenuList = document.querySelector('.lang-dropdown-menu');
    // let weatherMenuList = document.querySelector('.weather-dropdown-menu');
    // let moneyMenuList = document.querySelector('.money-dropdown-menu');
    // btnClickLang.addEventListener('click',function(){
    //     langMenuList.classList.toggle('active');
    // });
    // btnClickWeather.addEventListener('click',function(){
    //     weatherMenuList.classList.toggle('active');
    // });
    // btnClickMoney.addEventListener('click',function(){
    //     moneyMenuList.classList.toggle('active');
    // });
})


$(document).ready(function () {
    // 1.OWL CAROUSEL Element
    $('.owl-carousel:nth-child(1)').owlCarousel({
        loop: true,
        items: 1,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 2500,
        dots: true,
        smartSpeed: 1500,
    });
    // 2.OWL CAROUSEL Element
    $('.owl-carousel:nth-child(2)').owlCarousel({
        loop: true,
        margin: 20,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 500,
        dots: false,
        navText: ['<div>', '</div>'],
        responsive: {
            320: {
                items: 2,
                nav: true,
                loop: true,
                autoplay: true,
                autoplayTimeout: 1000,
            },
            576: {
                items: 3,
                nav: true,
                autoplay: true,
                loop: true,
                autoplayTimeout: 1000,
            },
            992: {
                items: 5,
                nav: true,
                autoplay: true,
                loop: true,
                autoplayTimeout: 1000,
            }
        }
    });
    // FIXED-BTN Codes
    $(window).scroll(function () {
        var scroll = $(this).scrollTop();
        if (scroll > 300) {
            $('.scroll__top').fadeIn();
        } else {
            $('.scroll__top').fadeOut();
        }
    })
    $('.scroll__top').click(function () {
        $('html,body').animate({
            scrollTop: 0,
        }, 1000);
    })
    // ALL DROPDOWN MENU CODES
    // $('.dropdown .btn').on('mouseleave', function(){
    //     $(this).next().fadeOut();
    // })
    // $('.dropdown .btn').next().on('mousemove', function(){
    //     $(this).fadeIn("fast");
    // })
    // $('.dropdown .btn').next().on('mouseleave', function(){
    //     $(this).fadeOut();
    // })
})