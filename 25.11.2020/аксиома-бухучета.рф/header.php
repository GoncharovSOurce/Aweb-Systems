<link rel="stylesheet" href="../../src/style_main.css">
<link rel="stylesheet" type="text/css" href="../../slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="../../slick/slick-theme.css"/>
<script src="../../lightbox/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="../../slick/slick.min.js"></script>
<script type="text/javascript" src="../../exform/exform.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($){
   $('.header-form').exform({theme:'callback'});
   $('.style-callback5').exform({theme:'style-callback5', wrapper: "style-callback5", message : false});
});
</script>
<script src="//code.jivosite.com/widget/PENQ7vahoL" async></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.home-slider').slick({
      dots: false,
      infinite: true,
      speed: 500,
      fade: true,
      autoplay: true,
      prevArrow: "<img src='/pig/влево.png' class='prev'>",
      nextArrow: "<img src='/pig/вправо.png' class='next'>",
      autoplaySpeed: 5000,
      cssEase: 'linear'
    });
});
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.spec-1').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 1,
      prevArrow: "<img src='/pig/влево.png' class='prev1'>",
      nextArrow: "<img src='/pig/вправо.png' class='next1'>",
    });
});
</script>
<script type="text/javascript">
  jQuery( document ).ready(function() {
    jQuery('#scrollup img').mouseover( function(){
      jQuery( this ).animate({opacity: 0.65},100);
    }).mouseout( function(){
      jQuery( this ).animate({opacity: 1},100);
    }).click( function(){
      //window.scroll(0 ,0);  - резкая прокрутка
          jQuery('body,html').animate({scrollTop:0},800);
      return false;
    });

    jQuery(window).scroll(function(){
      if ( jQuery(document).scrollTop() > 0 ) {
        jQuery('#scrollup').fadeIn('fast');
      } else {
        jQuery('#scrollup').fadeOut('fast');
      }
    });
  });
</script>
<!-- Rating@Mail.ru counter -->
<script type="text/javascript">
var _tmr = _tmr || [];
_tmr.push({id: "2523513", type: "pageView", start: (new Date()).getTime()});
(function (d, w) {
   var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true;
   ts.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//top-fwz1.mail.ru/js/code.js";
   var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
   if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
})(document, window);
</script><noscript><div style="position:absolute;left:-10000px;">
<img src="//top-fwz1.mail.ru/counter?id=2523513;js=na" style="border:0;" height="1" width="1" alt="Рейтинг@Mail.ru" />
</div></noscript>
<!-- //Rating@Mail.ru counter -->
</head>
<body leftmargin="0" topmargin="0" rightmargin="0" bottommargin="0">

<header class="header">
  <div class="container">
    <div class="header-logo">
      <a href="/"><img src="/pig/logo.png" alt=""></a>
      <div class="header-logo__info">
        <a href="/"><p class="header-logo__title">Аксиома <span>Бухучета</span></p></a>
        <p class="header-logo__description">Бухгалтерские и юридические услуги</p>
      </div>
    </div>

    <div class="header-address">
      <p class="header-address__add">Москва. Высоковольтный проезд, д. 13а</p>
      <p class="header-address__email"><a href="mailto:info@asbu.ru">info@asbu.ru</a></p>
      <p class="header-address__time">Пн-Чт 9:00 - 18:00, Пт 9:00 - 17:00</p>
    </div>

    <div class="header-tel">
    <a href="tel:74996410272">+7 (499) 641-02-72</a>
    <a href="tel:74991364335">+7 (499) 136-43-35</a>
    <div class="header-tel__btn">
      <a  href="/" class="header-form">Заказать звонок</a>
    </div>
    </div>
  </div>
</header>
<div class="wrapp-menu">
    <div class="container">
      <ul>
        <li><a href="/">Главная </a></li>
        <li>
          <a href="/company/company.html">О компании </a>
          <img src="/pig/botom.png" alt="">
          <ul class="sub-menu">
            <li><a href="/company/nasha-komanda.html">Наша команда </a></li>
            <li><a href="/partners/partners.html">Партнеры </a></li>
            <li><a href="/news/news.html">Новости </a></li>
            <li><a href="/info/info.html">Статьи </a></li>
            <li><a href="/faq/faq.php">Вопросы и ответы </a></li>
          </ul>
        </li>
        <li>
          <a href="/buh_services/buh_services.html">Бухгалтерские услуги </a>
          <img src="/pig/botom.png" alt="">
          <ul class="sub-menu">
            <li><a href="/buh_services/dlya-ooo.html">Бухгалтерские услуги для ООО </a></li>
            <li><a href="/buh_services/dlya-ip.html">Бухгалтерские услуги для ИП  </a></li>
            <li><a href="/buh_services/buh_services1.html">Ведение бухгалтерского учета ООО, ОАО, ЗАО  </a></li>
            <li><a href="/buh_services/buh_services2.html">Ведение бухгалтерского учета ИП  </a></li>
            <li><a href="/buh_services/buh_services3.html">Нулевая отчетность </a></li>
            <li><a href="/consultations/consultations.html">Консультация бухгалтера </a></li>
            <li><a href="/accounting_software/accounting_software.html">Бухгалтерские программы </a></li>
            <li><a href="/calendar_accountant/calendar_accountant.html">Календарь бухгалтера </a></li>
          </ul>
        </li>
        <li>
          <a href="/legal_services/legal_services.html">Юридические услуги </a>
          <img src="/pig/botom.png" alt="">
          <ul class="sub-menu">
            <li><a href="/legal_services/legal_services1.html">Регистрация ООО </a></li>
            <li><a href="/legal_services/legal_services2.html">Регистрация ОАО  </a></li>
            <li><a href="/legal_services/legal_services3.html">Регистрация ЗАО  </a></li>
            <li><a href="/legal_services/legal_services4.html">Регистрация ИП  </a></li>
            <li><a href="/legal_services/legal_services5.html">Ликвидация организации  </a></li>
            <li><a href="/legal_services/legal_services6.html">Готовые фирмы </a></li>
            <li><a href="/legal_services/legal_services7.html">Внесение изменений  </a></li>
          </ul>
        </li>
        <li><a href="/reclama/reclama.html">Акции </a></li>
        <li><a href="/otzivi/otzivi.html">Отзывы </a></li>
        <li><a href="/company/contakt.html">Контакты </a></li>
      </ul>
    </div>
  </div>
