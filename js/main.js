AOS.init();

jQuery(document).ready(function($) {
    var scrollTop = $(window).scrollTop();
    if (scrollTop > 1) {
        $('header').addClass('alt');
        $('.top-line-wrapper').addClass('alt');
        $('.advantages').addClass('alt');
    } else {
        $('header').removeClass('alt');
        $('.top-line-wrapper').removeClass('alt');
        $('.advantages').removeClass('alt');
    }

    //спрятать все выпадающие окна при внешнем клике
    $(document).click(function(){
        $(".dropdown").slideUp();
        $('.burger.open').removeClass('open');
    });

    //выбор языка
    $('.dropdown-active').click(function(e){
        e.stopPropagation();

        if ($(window).width() > 767) {
            $('.burger.open').removeClass('open');
            $('.dropdown').not($('.dropdown.choices')).slideUp(100);
        }

        $('.dropdown.choices').slideToggle(250);
    });

    //меняем язык при выборе другого
    $('.dropdown.choices ul li').click(function(e) {
        e.stopPropagation();

        $('.dropdown.choices ul li').removeClass('active');
        $(this).addClass('active');

        if ($(window).width() > 767) {
            $(".dropdown-active").contents().filter(function(){
                return this.nodeType == 3;
            })[0].nodeValue = $(this).text();
        } else {
            $(".dropdown-active").contents().filter(function(){
                return this.nodeType == 3;
            })[2].nodeValue = $(this).text();
        }

        $('.dropdown.choices').slideUp();
    });

    //клик по бургеру
    $('.burger').click(function (e) {
        e.stopPropagation();
        $('.dropdown').not('.burger-menu').slideUp(100);

        $(this).toggleClass('open');
        $('.burger-menu').slideToggle();
    });

    //переход по якорной ссылке в меню бургера
    $(".burger-menu a").click(function () {
        var elementClick = $(this).attr("href")
        var destination = $(elementClick).offset().top;
        jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 800);
        $('.burger-menu').slideUp();
        $('.burger.open').removeClass('open');
        return false;
    });

    //блок преимуществ - подключений анимаций
    var anim1 = lottie.loadAnimation({
        container: document.getElementById('anim-1'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: templateUrl + '/js/animation/advantages/01-exchanges.json'
    });

    var anim2 = lottie.loadAnimation({
        container: document.getElementById('anim-2'),
        renderer: 'svg',
        loop: true,
        autoplay: false,
        path: templateUrl + '/js/animation/advantages/02-sandbox.json'
    });

    var anim3 = lottie.loadAnimation({
        container: document.getElementById('anim-3'),
        renderer: 'svg',
        loop: true,
        autoplay: false,
        path: templateUrl + '/js/animation/advantages/03-bot.json'
    });

    var anim4 = lottie.loadAnimation({
        container: document.getElementById('anim-4'),
        renderer: 'svg',
        loop: true,
        autoplay: false,
        path: templateUrl + '/js/animation/advantages/04-analytics.json'
    });

    var anim5 = lottie.loadAnimation({
        container: document.getElementById('anim-5'),
        renderer: 'svg',
        loop: true,
        autoplay: false,
        path: templateUrl + '/js/animation/advantages/05-support.json'
    });

    $('.advantages h2').click(function() {
        $('.adv-desc-right #anim-1').fadeToggle('slow');
    });

    //блок преимуществ - клик по кнопке
    $(".advantage").click(function() {
        if (!$(this).hasClass("active")) {
            $(".advantage").removeClass("active");
            $(this).addClass("active");
        }
        switch($(this).attr('id')) {
        case 'a1':
        case 'a11':
            $.when( $('.adv-desc-left > div:first-child > div.active').fadeOut(200) ).then(function() {
                $('.adv-desc-left > div:first-child > div.active').removeClass('active');
                $('.adv-desc-left > div:first-child > div#b1').fadeIn(1).addClass('active');
            });
            $.when( $('.adv-desc-right > div.active').fadeOut().removeClass('active') ).then(function(){
                $.when($('.adv-desc-right #anim-1').fadeIn().addClass('active')).then(function() {
                    anim1.play();
                    anim2.stop();
                    anim3.stop();
                    anim4.stop();
                    anim5.stop();
                });
            });
        break;

        case 'a2':
        case 'a22':
            $.when( $('.adv-desc-left > div:first-child > div.active').fadeOut(200) ).then(function() {
                $('.adv-desc-left > div:first-child > div.active').removeClass('active');
                $('.adv-desc-left > div:first-child > div#b2').fadeIn(1).addClass('active');
            });

            $.when( $('.adv-desc-right > div.active').fadeOut().removeClass('active') ).then(function(){
                $.when($('.adv-desc-right #anim-2').fadeIn().addClass('active')).then(function() {
                    anim1.stop();
                    anim2.play();
                    anim3.stop();
                    anim4.stop();
                    anim5.stop();
                });
            });
        break;

        case 'a3':
        case 'a33':
            $.when( $('.adv-desc-left > div:first-child > div.active').fadeOut(200) ).then(function() {
                $('.adv-desc-left > div:first-child > div.active').removeClass('active');
                $('.adv-desc-left > div:first-child > div#b3').fadeIn(1).addClass('active');
            });
            $.when( $('.adv-desc-right > div.active').fadeOut().removeClass('active') ).then(function(){
                $.when($('.adv-desc-right #anim-3').fadeIn().addClass('active')).then(function() {
                    anim1.stop();
                    anim2.stop();
                    anim3.play();
                    anim4.stop();
                    anim5.stop();
                });
            });
        break;

        case 'a4':
        case 'a44':
            $.when( $('.adv-desc-left > div:first-child > div.active').fadeOut(200) ).then(function() {
                $('.adv-desc-left > div:first-child > div.active').removeClass('active');
                $('.adv-desc-left > div:first-child > div#b4').fadeIn(1).addClass('active');
            });
            $.when( $('.adv-desc-right > div.active').fadeOut().removeClass('active') ).then(function(){
                $.when($('.adv-desc-right #anim-4').fadeIn().addClass('active')).then(function() {
                    anim1.stop();
                    anim2.stop();
                    anim3.stop();
                    anim4.play();
                    anim5.stop();
                });
            });
        break;

        case 'a5':
        case 'a55':
            $.when( $('.adv-desc-left > div:first-child > div.active').fadeOut(200) ).then(function() {
                $('.adv-desc-left > div:first-child > div.active').removeClass('active');
                $('.adv-desc-left > div:first-child > div#b5').fadeIn(1).addClass('active');
            });
            $.when( $('.adv-desc-right > div.active').fadeOut().removeClass('active') ).then(function(){
                $.when($('.adv-desc-right #anim-5').fadeIn().addClass('active')).then(function() {
                        anim1.stop();
                        anim2.stop();
                        anim3.stop();
                        anim4.stop();
                        anim5.play();
                });
            });
        break;
        }
    });

    //блок бирж, анимация
    lottie.loadAnimation({
        container: document.getElementById('exchanges-anim'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: templateUrl + '/js/animation/exchanges.json'
    });

    //блок схемы работы, анимация
    lottie.loadAnimation({
        container: document.getElementById('scheme-anim'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: templateUrl + '/js/animation/scheme-of-work.json'
    });


    $(window).scroll(function(){
        //анимация меню хедера
        var scrollTop = $(window).scrollTop();
        if (scrollTop > 1) {
            $('header').addClass('alt');
            $('.top-line-wrapper').addClass('alt');
            $('.advantages').addClass('alt');
        } else {
            $('header').removeClass('alt');
            $('.top-line-wrapper').removeClass('alt');
            $('.advantages').removeClass('alt');
        }

        //блок возможностей, анимация в конце блока
        var my_offset = $('.fir').offset().top - $('.opp-imgs').offset().top;
        var target_offset = 1980;
        if ($(window).width() < 1025) target_offset = 2240;
        if (my_offset >= target_offset) {
            $('.opp-imgs').addClass('smaller');
        } else {
            $('.opp-imgs').removeClass('smaller');
        }
    });

    //блок тарифов, слайдер карточек
    $('.cards-tariffs').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: "unslick"
            }
        ]
    });

    //блок faq, клик по аккордиону
    $(".quick-answers .question-head").click(function () {
        if (!$(this).hasClass('active')) {
            $(".quick-answers .question-head").removeClass('active');
            $(".quick-answers .question-body").slideUp();
            $(this).addClass('active');
            $(this).next().slideDown();
        } else {
            $(".quick-answers .question-head").removeClass('active');
            $(".quick-answers .question-body").slideUp();
        }
    });

    //блок новостей, слайдер
    $('.news-cards').slick({
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    dots: false,
                    centerMode: true,
                    arrows: false,
                    variableWidth: true,
                    respondTo: 'min',
                },
                breakpoint: 769,
                settings: {
                    dots: false,
                    centerMode: false,
                    arrows: false,
                    variableWidth: true,
                    respondTo: 'min',
                }
            }
        ]
    });
});