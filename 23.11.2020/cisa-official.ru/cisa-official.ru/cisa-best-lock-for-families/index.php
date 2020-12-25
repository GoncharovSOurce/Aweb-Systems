<?php
/*$routes = explode('/',$_SERVER['REQUEST_URI']);
$route = trim($routes[1], '/').'.php';
if (!$routes[1]) {
    require_once('./lang/whatIsLang.php'); //baby don`t hurt me
} else {
    $user_lang = $routes[1];
}*/

// $site_lang = 'ru';

// if(isset($_GET['en'])){
//   $site_lang = 'en';
// }
/*
if($user_lang === 'en'){
    require_once('./lang/en.php');
    $another_lang = 'ru';
}else {
    require_once('./lang/ru.php');
    $another_lang = 'en';
}
require_once('./config.php');

/*
function l($text){

    global $lang;
    return (isset($lang[$text]) ? $lang[$text] : '');
}*/

include('/config.php'); //там мы зададим переменную $total

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="yandex-verification" content="69de0e38d61edede" />

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CISA Official - ремонт, вскрытие, продажа и сервис замков Cisa</title>

    <!-- Bootstrap -->
    <link href="/styles/bootstrap.min.css" rel="stylesheet">
    <!-- Custom css -->
    <link rel="stylesheet" href="/styles/styles.css">
    <link rel="stylesheet" href="/styles/lightbox.min.css">


    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/lightbox.min.js"></script>

    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript">
    </script>

    <script type="text/javascript">
        // Как только будет загружен API и готов DOM, выполняем инициализацию
        ymaps.ready(init);

        function init () {
            var myMap = new ymaps.Map("map", {
                    center: [55.75582,37.61721],
                    zoom: 8
                }),
                // Создаем многоугольник
                myPolygon = new ymaps.Polygon([[
                    // Координаты вершин внешней границы многоугольника.
                    [56.096539,37.18062], // ложки
                    [56.137117,37.50746], // трудовая
                    [56.206687,37.540425], // подосинки
                    [56.106496,37.959279], // софрино
                    [55.994696,38.337952], // черноголовка
                    [55.828443,38.443695], // ногинск
                    [55.736781,38.454722], // фрязево
                    [55.419039,38.2956949], // бронницы
                    [55.326958,37.552744], // климовск
                    [55.410463,37.191667], // шишкин лес
                    [55.512461,36.9883219], // алабино
                    [55.63435,37.003428], // голицыно
                    [55.724946,36.85648], // звенигород
                    [56.0100537,37.036387] // зеленоград
                ]]);

            myMap.geoObjects
                .add(myPolygon);

            if($(window).width() < 768){
                myMap.behaviors.disable('drag')
            }
        }
    </script>



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript">
var __cs = __cs || [];
__cs.push(["setCsAccount", "nkBX1acgPrhGfh4O21A4v5Ls1FgFOOQz"]);
</script>
<script type="text/javascript" async src="https://app.comagic.ru/static/cs.min.js"></script>

</head>
<body class="other-page">
<section class="section-main otherpage-main" id="main">
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 main-header__items">
                    <div class="main-header__item">
                        <div class="header-logo">
                            <img src="/img/skin/logo.png" alt="Logo">
                            <div class="right header-logo__slogan">Made in Italy since 1926</div>
                        </div>
                        <p class="main-header__desc">— официальный сервисный <br> центр CISA в России</p>

                        <div class="btn-group main-header__btns">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Меню сайта <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" id="scroller">
                                <li><a href="/#main">Главная</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="/#about">О нас в цифрах</a></li>
                                <li><a href="/#price-services">Цены на услуги</a></li>
                                <li><a href="/#find-master">Найти мастера</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="/#catalog">Каталог CISA</a></li>
                                <li><a href="/#eight-facts">8 фактов о CISA</a></li>
                                <li><a href="/#pricelist">Прайс-лист CISA</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="/#contacts">Найти сервисный центр</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="tel:+7-495-532-03-37" >+7-495-532-03-37</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="/cisa-best-lock-for-families" >Лучший замок для молодоженов </a></li>
                                <li><a target="_blank" href="https://vk.com/public181492164" >CISA ВКонтакте <img src="/img/skin/vk.svg" width="22" alt="Официальный сервис CISA Вконтакте"></a></li>
                            </ul>
                        </div>


                    </div>
                    <div class="main-header__item hidden-xs">
                        <p class="main-header__time">ежедневно <br>9:00 &mdash; 19:00</p>
                        <a href="tel:+7-495-532-03-37" class="main-header__phone">+7-495-532-03-37</a>
                        <a target="_blank" href="https://vk.com/public181492164" ><img src="/img/skin/vk.svg" width="40" alt="Официальный сервис CISA Вконтакте"></a>
                    </div>
                </div>
            </div>
            <div class="row visible-xs center">
                <div class="col-xs-12">
                    <div class="main-header__item center">
                        <p class="main-header__time">ежедневно <br>9:00 &mdash; 19:00</p>
                        <a href="tel:+7-495-532-03-37" class="main-header__phone">+7-495-532-03-37</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="stamp">
            <img src="/img/skin/stamp.png" alt="">
        </div>
    </div>

    <div class="container">
        <div class="row main-cont">
            <div class="col-xs-12">
                <h1><span>CISA 56.013</span>первый замОк<br>для новоселов</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-1 col-md-6 col-md-offset-1">
                <div class="main-crumbs">
                    <a href="/">Главная</a>
                    <a href="#" class="crumb-active">CISA 56.013</a>
                </div>

                <p class="otherpage-main__desc">При покупке квартир на вторичном жилье, новым владельцам недвижимости зачастую достаются входные стальные двери родом из 90-х - это весьма архаичные изделия кустарных мастерских-кооперативов, возникших на обломках некогда мощной советской индустрии.</p>
            </div>
        </div>
    </div>

    <div class="main-arrow">
        <a href="#about"><img src="/img/skin/arrow-icon.png" alt="Arrow"></a>
    </div>
</section>

<section class="section-mesto other-page-about">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 mesto-cont">
                <h2>Немного истории...</h2>
            </div>
        </div>

        <div class="row mesto-text">
            <div class="col-xs-12 col-md-4">
                <p>В начале 90-х на постсоветском пространстве практически невозможно было найти качественных замков, достойных установки в защитные металлоконструкции, поэтому производители дверей закупали то, что было доступно на рынке или даже мастерили замки своими руками. К примеру, один из кооперативов, созданных в 1987 г., производивший самые первые стальные двери в подвале в центре Москвы на Трубной улице, «дорабатывал» замки подмосковного завода Мосрентген, вводя в конструкцию старого советского замка запорные элементы, напоминающие сейфовые засовы-«ригели».<br><br>Всё это удивительное многообразие можно наблюдать в стальных дверях, выпущенных в начале 90-х – начале 2000-х, пока не пришёл черёд </p>

            </div>

            <div class="col-xs-12 col-md-4">
                <p>стандартизации размеров посадочных мест замков. Более того, к середине 2000-х уже определился ряд лидеров, выигравших схватку с другими создателями надёжных систем запирания.<br><br>Производители серийных замков, войдя на рынок России, приучили переработчиков и потребителей к определённым типоразмерам замков, тем самым упростив задачи выбора, монтажа и замены замков своим клиентам – производителям и потребителям дверей.<br><br>Спустя годы, благодаря прочности металла и терпению владельцев, в большинстве городов России можно встретить такие «двери первой волны» – часто изготовленные из прямоугольного профиля, уголка и даже швеллера (!).</p>
            </div>
        </div>

        <div class="row other-page__aboutimg">
            <div class="col-xs-12">
                <img src="/img/skin/page/about-img.png" alt="" class="img-resp">
            </div>
        </div>
    </div>
</section>

<section class="section-mesto otherpage-third">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 mesto-cont">
                <img src="/img/skin/logo.png" alt="">
                <h2>А в наши дни???</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-1 col-md-4 col-md-offset-0">
                <div class="redtext">
                    Варианты размера «Backset» (глубины от планки до центра цилиндра) – 45, 50, 60 и 70 мм, что позволяет слесарю аккуратно смонтировать новый замок на место прежнего.
                    <div class="redtext-info">
                        <p>Это важно!</p>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-md-8 third-img">
                <img src="/img/skin/page/third-img.png" alt="">
            </div>
        </div>

        <div class="row mesto-text">
            <div class="col-xs-12 col-sm-5 col-md-5 col-md-offset-1">
                <p>В нынешние времена, новые владельцы квартир в большинстве случаев сталкиваются с проблемой замены замков, вызванной изменением геометрических размеров запирающих устройств, параметров механизма секретности, конфигурацией засова и т.д.<br><br>Общеизвестно, что покупка объекта недвижимости и проведение в нём ремонтных работ являются весьма дорогостоящим занятием, поэтому на новую входную дверь у домовладельца зачастую попросту не остаётся средств.<br><br>При этом стальная дверь, хоть и устарела и неказиста, но ещё вполне прочна и может послужить своим хозяевам до момента её замены на новую, современную и надёжную.</p>

            </div>

            <div class="col-xs-12 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-1">
                <p>В ситуации, когда затраты на ремонт квартиры превзошли самые смелые ожидания жильцов, компания CISA рекомендует обратить внимание на цилиндровые замки серии 56.013.хх.<br><br>Данная модель была создана специально для тех случаев, когда устаревший или испорченный замок подлежит гарантированной замене.<br><br>Конструкция замка, особенно его длинная лицевая планка, позволяет полностью перекрыть монтажное окно предшествующего замка.<br><br>Варианты размера «Backset» (глубины от планки до центра цилиндра) – 45, 50, 60 и 70 мм, что позволяет слесарю аккуратно смонтировать новый замок на место прежнего.</p>
            </div>
        </div>
    </div>
</section>

<section class="otherpage-fourth">
    <div class="container">
        <div class="fourth-img">
            <img src="/img/skin/page/gvozd.png" alt="">
        </div>
        <div class="row">
            <div class="col-md-4 otherpage-fourth__left">
                <p>Замок CISA 56.013.хх оснащён дискретным механизмом привода и принадлежит к II классу ГОСТ. Замок имеет компактный оцинкованный корпус с отверстиями для монтажа стандартных броненакладок и бронепластин CISA.</p>
                <img src="/img/skin/page/waveline.png" alt="">
            </div>

            <div class="col-xs-12 col-md-4 col-md-offset-4 text-right">
                <!--<a href="#">Подробнее про броненакладку</a>-->
                <h2>Броне<br>плас<br>тина<br><span>CISA</span><br><small><small><small>типа &laquo;Шеврон&raquo;</small></small></small></h2>
            </div>
        </div>
    </div>
</section>

<section class="otherpage-catalog">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-5">
                <h3>А цилиндр можно выбрать, тем более есть из чего :)</h3>

                <p class="text-grey">Данный замок поставляется в виде корпуса, то есть без цилиндра, позволяя клиенту выбрать цилиндровый механизм секретности в зависимости от бюджета и требований безопасности – от 6-пинового экономичного СISA Asix до 19-пинового CISA RS3S.<br><br>Установка броненакладки гарантирует защиту цилиндра от механических атак и позволяет перекрыть монтажные отверстия прежнего замка.<br><br>Благодаря привлекательной цене, замок CISA 56.013.хх не разорит своего хозяина, но сбережёт его имущество и устранит беспокойство о вторжении в дом непрошенных гостей.</p>
            </div>

            <div class="col-xs-12 col-md-6 col-md-offset-1 otherpage-catalog__items">
                <div class="otherpage-catalog__item">
                    <img src="/img/skin/page/cat-1.png" alt="">
                    <h4>ASIX</h4>
                </div>

                <div class="otherpage-catalog__item">
                    <img src="/img/skin/page/cat-2.png" alt="">
                    <h4>ASTRAL, ASTRAL S</h4>
                </div>

                <div class="otherpage-catalog__item">
                    <img src="/img/skin/page/cat-3.png" alt="">
                    <h4>ASTRAL TEKNO</h4>
                </div>

                <div class="otherpage-catalog__item">
                    <img src="/img/skin/page/cat-4.png" alt="">
                    <h4>AP3</h4>
                </div>

                <div class="otherpage-catalog__item">
                    <img src="/img/skin/page/cat-5.png" alt="">
                    <h4>RS3 S</h4>
                </div>

                <div class="otherpage-catalog__item">
                    <img src="/img/skin/page/cat-6.png" alt="">
                    <h4>C2000</h4>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 footer-items">
                <div class="footer-item">
                    <img src="/img/skin/logo.png" alt="Logo">
                    <p class="footer-desc">Настоящий сайт и представленные на нем материалы носят исключительно информационный характер и ни при каких условиях не являются публичной офертой, определяемой положениями Статьи 437 Гражданского кодекса Российской Федерации.</p>
                </div>

                <div class="footer-item text-right">
                    <img src="/img/skin/footer-img.png" alt="Footer">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 footer2-items">
                <div class="footer2-item">
                    <p>© 2011-2019 «CISA Service»</p>
                </div>
                <div class="footer2-item text-center">
                    <a href="/img/skin/consent-cisa.pdf" target="_blank">Политика конфиденциальности</a>
                </div>
                <div class="footer2-item text-right">
                    <p>Разработка сайта — <a href="#">Студия Esoteric Design</a></p>
                </div>
            </div>
        </div>
    </div>
</section>


    <div class="popup">
      <div class="popup-cont">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <h2>Монтаж, установка,<br>вскрытие, сервис<br>замков CISA</h2>
              <p class="text-grey t-width">Заполните форму ниже и наши менеджеры свяжутся с вами через 10 минут.</p>

              <div class="popup-form">
                <form action="/" method="post">
                    <input type="text" class="hidden" name="name" value="Ваше имя">
                    <input type="text" class="hidden" name="login" value="">
                  <input type="text" name="username" placeholder="Ваше имя">
                  <input type="tel" name="usermail" placeholder="+7">
                  <button class="cta-btn">Отправить</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="popup-close text-center">
          <img src="/img/skin/close.png" alt="Close">
          <p>скрыть</p>
        </div>
      </div>
    </div>

    <script src="/js/ed.js"></script>
    <?php
    if($show_alert == 1){

        echo '<script type="text/javascript">    
          //jQuery(window).load(function($){
            alert("Ваше сообщение отправлено. Наш менеджер скоро свяжется с вами.");
            //parent.$(".orderforminner").colorbox.close();
          //});    
        </script>';

    }else if($show_alert == 2){

        echo '<script type="text/javascript">   
        //  jQuery(window).load(function($){
            alert("Введите корректные данные.");
          //});    
        </script>';

    }else if($show_alert == 3){

        echo '<script type="text/javascript">   
          //jQuery(window).load(function($){
            alert("Следующее сообщение вы можете отправить через 60 сек.");
          //});    
        </script>';

    }
    ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-46280573-14"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-46280573-14');
    </script>
	
	<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(66356323, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        trackHash:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/66356323" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

  </body>
</html>