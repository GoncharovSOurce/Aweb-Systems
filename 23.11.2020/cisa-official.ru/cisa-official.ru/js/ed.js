$(document).ready(function(){



    $('#scroller a, .scroll-to').off().on('click', function (e) {
        var scrollRealValue;

        if (!$(this).hasClass('dropdown-toggle')) {


            $href = $(this).attr('href');
            if ($href.substr(0, 1) !== '#') {
                window.location = $href;
                return true;
            }

            e.preventDefault();

            /*if(document.URL !== '/'){
                window.location = $href;
            }*/

            /*if($href.substr(0, 1) === '/'){
                $href = $href.substr(1);
            }*/

            if(!$(this).hasClass('scroll-to')) {
				$(".navbar-toggle:visible").trigger('click');
            }

            //scrollRealValue = $('body').scrollTop() + $($href).offset().top;
            scrollRealValue = parseInt($('body').offset().top + $($href).offset().top);

            if(isNaN(scrollRealValue)){
                return false;
            }

            $('html').animate({scrollTop: scrollRealValue+'px'}, 900);

            $(this).blur();

            return $(this);
        }
    });


	$('.main-tab').click(function (event) {
	    //отменяем стандартную обработку нажатия по ссылке
	    event.preventDefault();
	    //забираем идентификатор бока с атрибута href
	    var id  = $(this).attr('data-href'),

	    //узнаем высоту от начала страницы до блока на который ссылается якорь
	    top = $(id).offset().top;
	    //анимируем переход на расстояние - top за 1500 мс
	    $('body,html').animate({scrollTop: top}, 900);
	});

	$('.footer__menu a').click(function (event) {
	    //отменяем стандартную обработку нажатия по ссылке
	    event.preventDefault();
	    //забираем идентификатор бока с атрибута href
	    var id  = $(this).attr('href'),

	    //узнаем высоту от начала страницы до блока на который ссылается якорь
	    top = $(id).offset().top - 80;
	    //анимируем переход на расстояние - top за 1500 мс
	    $('body,html').animate({scrollTop: top}, 900);
	});



	//СКРЫТОЕ МЕНЮ
	$(window).scroll(function() {
	  if($(window).scrollTop() > 735)
	  {

	  	$('.main-header__btns').addClass('superfixed');

	  	$('.menu-fixed').slideDown(100);
	  }
	  else
	  {
          $('.main-header__btns').removeClass('superfixed');
	    $('.menu-fixed').slideUp(100);
	  }
	});



	//XS MENU
	$('.menu-xs__link').click(function(){
		$('.menu-xs').css('right', '0');
	});
	$('.menu-close').click(function(){
		$('.menu-xs').css('right', '-102vw');
	});



	//MAIN TABS
	$('.main-tab').mouseover(function(){
		$('.main-tab').removeClass('main-tab__active');
		$(this).addClass('main-tab__active');
		var tab_num = $(this).attr('data-number');
		$('.main-bg').removeClass('main-bg__active');
		$('.main-bg'+tab_num).addClass('main-bg__active');
	});



	//CATALOG
	$('.findmaster-header').click(function(){
		var master_item = $(this).parent('.findmaster-master').find('.findmaster-body');
		var master_arrow = $(this).find('.findmaster-icon');
		if($(this).attr('data-show') == 0) {
			$('.findmaster-body').slideUp(200);
			$('.findmaster-icon').removeClass('findmaster-icon__active');
			$('.findmaster-header').attr('data-show', '0');
			$(master_item).slideDown(200);
			$(master_arrow).addClass('findmaster-icon__active');
			$(this).attr('data-show', '1');
		}
		else {
			$(master_item).slideUp(200);
			$(master_arrow).removeClass('findmaster-icon__active');
			$(this).attr('data-show', '0');
		}
	});



	//POPUP
	$('.popup-open').click(function(){
		$('.popup').fadeIn(200);
		$('.popup-cont').addClass('popup-active');
	});
	$('.popup-close').click(function(){
		$('.popup-cont').removeClass('popup-active');
		$('.popup').fadeOut(200);
	});


    navigator.geolocation.getCurrentPosition(function(position) {

       $('#geoid').html(""+position.coords.latitude+","+position.coords.longitude);
    });
    

});