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
    <title>Врезные замки Cisa купить в Москве по доступным ценам </title>
  <meta name="description" content="В нашей компании Вы можете купить врезные замки Cisa (Чиза) а также заказать сервис, ремонт, вскрытие и другие услуги по доступным ценам в Москве.">
  <meta name="keywords" content="-">

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
<section class="pad_70" id="main">
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
                <h1>Врезные замки Cisa</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-1 col-md-6 col-md-offset-1">
                <div class="main-crumbs">
                    <a href="/">Главная</a>Врезные замки Cisa
                </div>

               
            </div>
        </div>
    </div>
</section>











<div class="price_flex">
  <div class="price_flex1">
    <img src="/img/skin/1.png" alt="">
    <h4>Замок Cisa 17.685</h4>
    <div class="price_flex2">
      <p class="price-item__price"><span>=</span> 16 900 р.</p>
      <button class="cta-btn popup-open"><span>Купить</span></button>
    </div>
  </div>

  <div class="price_flex1">
    <img src="/img/skin/2.png" alt="">
    <h4>Замок Cisa 17.535</h4>
    <div class="price_flex2">
      <p class="price-item__price"><span>=</span> 15 700 р.</p>
      <button class="cta-btn popup-open"><span>Купить</span></button>
    </div>
  </div>

  <div class="price_flex1">
    <img src="/img/skin/3.png" alt="">
    <h4>Замок Cisa 15.535</h4>
    <div class="price_flex2">
      <p class="price-item__price"><span>=</span> 13 900 р.</p>
      <button class="cta-btn popup-open"><span>Купить</span></button>
    </div>
  </div>

  <div class="price_flex1">
    <img src="/img/skin/4.png" alt="">
    <h4>Замок Cisa 56.786 </h4>
    <div class="price_flex2">
      <p class="price-item__price"><span>=</span> 10 200 р.</p>
      <button class="cta-btn popup-open"><span>Купить</span></button>
    </div>
  </div>

  <div class="price_flex1">
    <img src="/img/skin/5.png" alt="">
    <h4>Замок Cisa 56.835</h4>
    <div class="price_flex2">
      <p class="price-item__price"><span>=</span> 10 200 р.</p>
      <button class="cta-btn popup-open"><span>Купить</span></button>
    </div>
  </div>

  <div class="price_flex1">
    <img src="/img/skin/6.png" alt="">
    <h4>Замок Cisa 57.986 (Корпус)</h4>
    <div class="price_flex2">
      <p class="price-item__price"><span>=</span> 9 000 р.</p>
      <button class="cta-btn popup-open"><span>Купить</span></button>
    </div>
  </div>

  <div class="price_flex1">
    <img src="/img/skin/7.png" alt="">
    <h4>Замок Cisa 57.685</h4>
    <div class="price_flex2">
      <p class="price-item__price"><span>=</span> 8 600 р.</p>
      <button class="cta-btn popup-open"><span>Купить</span></button>
    </div>
  </div>

  <div class="price_flex1">
    <img src="/img/skin/8.png" alt="">
    <h4>Замок Cisa 57.966 (корпус)</h4>
    <div class="price_flex2">
      <p class="price-item__price"><span>=</span> 8 500 р.</p>
      <button class="cta-btn popup-open"><span>Купить</span></button>
    </div>
  </div>

  <div class="price_flex1">
    <img src="/img/skin/27.png" alt="">
    <h4>Замок Cisa 52.310</h4>
    <div class="price_flex2">
      <p class="price-item__price"><span>=</span> 2 500 р.</p>
      <button class="cta-btn popup-open"><span>Купить</span></button>
    </div>
  </div>  

  <div class="price_flex1">
    <img src="/img/skin/10.png" alt="">
    <h4>Замок Cisa 57.515</h4>
    <div class="price_flex2">
      <p class="price-item__price"><span>=</span> 7 950 р.</p>
      <button class="cta-btn popup-open"><span>Купить</span></button>
    </div>
  </div>

  <div class="price_flex1">
    <img src="/img/skin/11.png" alt="">
    <h4>Замок Cisa 57.535</h4>
    <div class="price_flex2">
      <p class="price-item__price"><span>=</span> 7 950 р.</p>
      <button class="cta-btn popup-open"><span>Купить</span></button>
    </div>
  </div>

  <div class="price_flex1">
    <img src="/img/skin/12.png" alt="">
    <h4>Замок Cisa 57.655 (57.675)</h4>
    <div class="price_flex2">
      <p class="price-item__price"><span>=</span> 7 900 р.</p>
      <button class="cta-btn popup-open"><span>Купить</span></button>
    </div>
  </div>

  <div class="price_flex1">
    <img src="/img/skin/13.png" alt="">
    <h4>Замок Cisa 57.665</h4>
    <div class="price_flex2">
      <p class="price-item__price"><span>=</span> 7 900 р.</p>
      <button class="cta-btn popup-open"><span>Купить</span></button>
    </div>
  </div>

  <div class="price_flex1">
    <img src="/img/skin/14.png" alt="">
    <h4>Замок Cisa 16.215</h4>
    <div class="price_flex2">
      <p class="price-item__price"><span>=</span> 7 900 р.</p>
      <button class="cta-btn popup-open"><span>Купить</span></button>
    </div>
  </div>

  <div class="price_flex1">
    <img src="/img/skin/15.png" alt="">
    <h4>Замок Cisa 57.525</h4>
    <div class="price_flex2">
      <p class="price-item__price"><span>=</span> 7 500 р.</p>
      <button class="cta-btn popup-open"><span>Купить</span></button>
    </div>
  </div>

  <div class="price_flex1">
    <img src="/img/skin/16.png" alt="">
    <h4>Замок Cisa 12.011.60</h4>
    <div class="price_flex2">
      <p class="price-item__price"><span>=</span> 7 300 р.</p>
      <button class="cta-btn popup-open"><span>Купить</span></button>
    </div>
  </div>

  <div class="price_flex1">
    <img src="/img/skin/17.png" alt="">
    <h4>Замок Cisa 56.535 Revolution Pro</h4>
    <div class="price_flex2">
      <p class="price-item__price"><span>=</span> 6 950 р.</p>
      <button class="cta-btn popup-open"><span>Купить</span></button>
    </div>
  </div>

  <div class="price_flex1">
    <img src="/img/skin/18.png" alt="">
    <h4>Замок Cisa 56.525 Revolutionpro</h4>
    <div class="price_flex2">
      <p class="price-item__price"><span>=</span> 6 950 р.</p>
      <button class="cta-btn popup-open"><span>Купить</span></button>
    </div>
  </div>

  <div class="price_flex1">
    <img src="/img/skin/19.png" alt="">
    <h4>Замок Cisa 57.505</h4>
    <div class="price_flex2">
      <p class="price-item__price"><span>=</span> 6 900 р.</p>
      <button class="cta-btn popup-open"><span>Купить</span></button>
    </div>
  </div>

  <div class="price_flex1">
    <img src="/img/skin/20.png" alt="">
    <h4>Замок Cisa 11630</h4>
    <div class="price_flex2">
      <p class="price-item__price"><span>=</span> 6 800 р.</p>
      <button class="cta-btn popup-open"><span>Купить</span></button>
    </div>
  </div>

  <div class="price_flex1">
    <img src="/img/skin/21.png" alt="">
    <h4>Замок врезной Cisa 57.028.60</h4>
    <div class="price_flex2">
      <p class="price-item__price"><span>=</span> 5 400 р.</p>
      <button class="cta-btn popup-open"><span>Купить</span></button>
    </div>
  </div>

  <div class="price_flex1">
    <img src="/img/skin/22.png" alt="">
    <h4>Замок Cisa 57.028.50</h4>
    <div class="price_flex2">
      <p class="price-item__price"><span>=</span> 4 900 р.</p>
      <button class="cta-btn popup-open"><span>Купить</span></button>
    </div>
  </div>

  <div class="price_flex1">
    <img src="/img/skin/23.png" alt="">
    <h4>Замок Cisa 57.220</h4>
    <div class="price_flex2">
      <p class="price-item__price"><span>=</span> 4 900 р.</p>
      <button class="cta-btn popup-open"><span>Купить</span></button>
    </div>
  </div>

  <div class="price_flex1">
    <img src="/img/skin/24.png" alt="">
    <h4>Замок Cisa 5C120.60</h4>
    <div class="price_flex2">
      <p class="price-item__price"><span>=</span> 3 200 р.</p>
      <button class="cta-btn popup-open"><span>Купить</span></button>
    </div>
  </div>

  <div class="price_flex1">
    <img src="/img/skin/25.png" alt="">
    <h4>Замок Cisa 5C110</h4>
    <div class="price_flex2">
      <p class="price-item__price"><span>=</span> 3 200 р.</p>
      <button class="cta-btn popup-open"><span>Купить</span></button>
    </div>
  </div>

  <div class="price_flex1">
    <img src="/img/skin/26.png" alt="">
    <h4>Замок Cisa 56.013</h4>
    <div class="price_flex2">
      <p class="price-item__price"><span>=</span> 2 500 р.</p>
      <button class="cta-btn popup-open"><span>Купить</span></button>
    </div>
  </div>  
</div>



      <section class="section-price" id="price-services">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h2 class="f_40">Прайс-лист (монтаж, установка, вскрытие и сервис)*</h2>
            <div class="price-items">
              <div class="price-item">
                <div class="price-block">
                  <div class="price-item__header">
                    <h4>Установка дверных замков</h4>
                    <p class="text-small">Установка замков в металлические двери (отечественный или импортный замок), деревянные, гараж. Также замена замка, цилиндра на старое место и ремонт замка.</p>
                  </div>

                  <div class="price-item__footer">
                    <p class="price-item__price"><span>~</span> 1 000 р.</p>
                    <button class="cta-btn popup-open"><span>Получить услугу</span></button>
                  </div>
                </div>
              </div>

              <div class="price-item">
                <div class="price-block">
                  <div class="price-item__header">
                    <h4>Установка дверных доводчиков</h4>
                    <p class="text-small">Установка замков в двери (отечественный или импортный замок), деревянных, гараж.</p>
                  </div>

                  <div class="price-item__footer">
                    <p class="price-item__price"><span>~</span> 1 500 р.</p>
                    <button class="cta-btn popup-open"><span>Получить услугу</span></button>
                  </div>
                </div>
              </div>

              <div class="price-item">
                <div class="price-block">
                  <div class="price-item__header">
                    <h4>Аварийное вскрытие замков и сейфов</h4>
                    <p class="text-small">Вскрытие замков в металлических дверях (отечественный или импортный замок), деревянных, гараж.</p>
                  </div>

                  <div class="price-item__footer">
                    <p class="price-item__price"><span>~</span> 1 200 р.</p>
                    <button class="cta-btn popup-open"><span>Получить услугу</span></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="price-item__long">
              <div class="price-item">
                <div class="price-block">
                  <div class="price-item__header">
                    <h4>Перекодировка замка</h4>
                    <p class="text-small">Перекодировка замков в металлических дверях (отечественный или импортный замок), деревянных, гараж.</p>
                  </div>

                  <div class="price-item__footer">
                    <p class="price-item__price"><span>~</span> 7 000 р.</p>
                    <button class="cta-btn popup-open"><span>Получить услугу</span></button>
                  </div>
                </div>
              </div>

              <div class="price-long-img">
                <img src="/img/skin/price-long-img.png" alt="">
              </div>
            </div>

            <p class="pricelist-i">* цена указана за 1 замок</p>
          </div>
        </div>
      </div>
    </section>



  
  


            <section id="pricelist" class="section-pricelist">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h2 class="f_40">Прайс-лист (изготовление дубликатов)*</h2>

            <div class="pricelist-items">
              <div class="pricelist-item1">
                <span>01</span>
                <p class="text-grey">Копии ключей для цилиндров с реверсивными ключами</p>
              </div>
              <div class="pricelist-item2">
                <div class="pricelist-block">
                  <img src="/img/skin/pricelist1.png" alt="">
                  <h4>ASIX</h4>

                  <div class="price-item__footer">
                    <p class="price-item__price"><span>=</span> 450 р.</p>
                    <button class="cta-btn popup-open"><span>Получить услугу</span></button>
                  </div>
                </div>
                  <div class="pricelist-block">
                  <img src="/img/skin/asixpro-pl.jpg" alt="">
                  <h4>ASIX PRO</h4>

                  <div class="price-item__footer">
                    <p class="price-item__price"><span>=</span> 700 р.</p>
                    <button class="cta-btn popup-open"><span>Получить услугу</span></button>
                  </div>
                </div>

                <div class="pricelist-block">
                  <img src="/img/skin/pricelist2.png" alt="">
                  <h4>ASTRAL, ASTRAL S</h4>

                  <div class="price-item__footer">
                    <p class="price-item__price"><span>=</span> 700 р.</p>
                    <button class="cta-btn popup-open"><span>Получить услугу</span></button>
                  </div>
                </div>

                <div class="pricelist-block">
                  <img src="/img/skin/pricelist3.png" alt="">
                  <h4>ASTRAL TEKNO</h4>

                  <div class="price-item__footer">
                    <p class="price-item__price"><span>=</span> 1 250 р.</p>
                    <button class="cta-btn popup-open"><span>Получить услугу</span></button>
                  </div>
                </div>

                <div class="pricelist-block">
                  <img src="/img/skin/pricelist4.png" alt="">
                  <h4>AP3</h4>

                  <div class="price-item__footer">
                    <p class="price-item__price"><span>=</span> 2 000 р.</p>
                    <button class="cta-btn popup-open"><span>Получить услугу</span></button>
                  </div>
                </div>

                <div class="pricelist-block">
                  <img src="/img/skin/pricelist5.png" alt="">
                  <h4>RS3 S</h4>

                  <div class="price-item__footer">
                    <p class="price-item__price"><span>=</span> 4 700 р.</p>
                    <button class="cta-btn popup-open"><span>Получить услугу</span></button>
                  </div>
                </div>
              </div>
            </div>

            <div class="pricelist-items">
              <div class="pricelist-item1">
                <span>02</span>
                <p class="text-grey">Копии ключей для цилиндров с односторонними ключами</p>
              </div>
              <div class="pricelist-item2">
                <div class="pricelist-block">
                  <img src="/img/skin/pricelist6.png" alt="">
                  <h4>C2000</h4>

                  <div class="price-item__footer">
                    <p class="price-item__price"><span>=</span> 200 р.</p>
                    <button class="cta-btn popup-open"><span>Получить услугу</span></button>
                  </div>
                </div>

              </div>
            </div>

            <div class="pricelist-items">
              <div class="pricelist-item1">
                <span>03</span>
                <p class="text-grey">Копии ключей для сувальдных замков</p>
              </div>
              <div class="pricelist-item2">
                <div class="pricelist-block">
                  <img src="/img/skin/pricelist7.png" alt="">
                  <h4></h4>

                  <div class="price-item__footer">
                    <p class="price-item__price"><span>От</span> 1000 р.</p>
                    <button class="cta-btn popup-open"><span>Получить услугу</span></button>
                  </div>
                </div>
              
              </div>
            </div>

          </div>
        </div>
        <div class="row col-xs-12 text-right">
          <p class="pricelist-i">* цена указана за 1 копию ключа</p>
        </div>
      </div>
    </section>	

      <section class="section-opredelenie">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h3>Определение замка по ключу</h3>
            <p class="text-grey just">Марку цилиндра (цилиндрового механизма) фирмы CISA легко можно определить по имеющемуся от него ключу. Представленные ниже изображения легко помогут сделать это и вам.</p>
          </div>
        </div>
        <div class="row opredelenie-items">
          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="opredelenie-item">
              <h4>RS3 S</h4>
              <img src="/img/skin/rs3-s.png" alt="">
            </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="opredelenie-item">
              <h4>AP3 S</h4>
              <img src="/img/skin/ap3-s.png" alt="">
            </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="opredelenie-item">
              <h4>Astral S</h4>
              <img src="/img/skin/astral-s.png" alt="">
            </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="opredelenie-item">
              <h4>Asix</h4>
              <img src="/img/skin/asix.png" alt="">
            </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="opredelenie-item">
              <h4>Astral Tekno</h4>
              <img src="/img/skin/astral-tekno.png" alt="">
            </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="opredelenie-item">
              <h4>Asix Pro</h4>
              <img src="/img/skin/asix-pro.png" alt="">
            </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="opredelenie-item">
              <h4>Перекодируемые замки (Basic)</h4>
              <img src="/img/skin/Basic.png" alt="">
            </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="opredelenie-item">
              <h4>Перекодируемые замки (ALPS)</h4>
              <img src="/img/skin/alps.png" alt="">
            </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="opredelenie-item">
              <h4>Antipicking</h4>
              <img src="/img/skin/Antipicking.png" alt="">
            </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="opredelenie-item">
              <h4>Монтажный ключ</h4>
              <img src="/img/skin/montazh-key.png" alt="">
            </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="opredelenie-item">
              <h4>Неперекодируемые замки</h4>
              <img src="/img/skin/neperekod-key.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

  
      <section class="section-findmaster" id="find-master">
      <div class="container">
        <div class="row just">
          <div class="col-xs-12">
            <div class="geo-header">
              <div><h3>Работаем по Москве и области</h3>
              <p class="text-grey t-width">Плывя на корабле по имени Cisa, расширяем границы сферы услуг.</p></div>

              <!--<div class="geo">
                <p>Ваше местоположение:</p>
                <span>САО г. Москва</span>
              <p id="geoid"></p>
              </div>-->
            </div>

            <div class="findmaster-items">
              <div class="findmaster-item1">
                <div id="map"></div>
              </div>
              <div class="findmaster-item2">
                <div class="findmaster-master">
                  <div class="findmaster-header" data-show="1">
                    <div class="findmaster-left">
                      <p class="km"><span>~</span> 103.1 км</p>
                      <p class="findmaster-name">Клиенты в диаметре</p>
                    </div>
                    <div class="findmaster-icon findmaster-icon__active">
                      <img src="/img/skin/find-icon.png" alt="Find">
                    </div>
                  </div>

                  <div class="findmaster-body">
                    <div class="findmaster-body__wrap">
                      <div class="findmaster-photo">
                      </div>

                      <div class="findmaster-phones">
                        <a href="#"><?=$site_telephones;?> (единый)</a>
                      </div>
                    </div>
                  </div>

                    <div class="findmaster-text" style="padding:15px;">
                        <p>Мы работаем по всей Москве и Московской области. Решаем срочные задачи, даже если у вас случился совсем неожиданный случай, и вы потеряли ключи, или
                        вдруг ключ сломался, мы придем на помощь и откроем сломавшийся замок. </p><br>
                        <p>Мы любим бренд Cisa, и работаем с ним уже 25 лет. Нет ничего лучше приятной Cisa в руках. Поверьте, это совершенно другой уровень итальянского качества.
                        Можно взять китайские ключи, или немецкие, но только с Cisa вы почувствуете себя не только в безопасности, но и выглядеть это будет красиво по сравнению со
                        всеми остальными брендами (да, это наше мнение)</p>
                    </div>
                </div>


                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
  
  
  
  
  
  

    <section class="section-address" id="contacts">
      <div class="container">
        <div class="row just">
          <div class="col-xs-12">
            <h3>Ваш сервисный центр</h3>
            <p class="text-grey t-width">Узнайте, где находится ближайший к вам сервисный центр, где можно сделать дубликат.</p>
              <br>
          </div>
        </div>
        <div class="bg-white rel ovx">
                  <div class="row just">
                      <div class="col-xs-12 col-sm-6 col-sm-push-6 textpane">
                          <br>
                          <br>
                              <p>Сервисный центр работает с продукцией компании CISA с начала 2000-х, получил одобрение компании CISA Ingersoll Rand в 2009г.
                              и прошёл сертификацию CISA Allegion в 2016г. Основу сервисного центра составляет стабильный коллектив из 10 высококлассных специалистов,
                              имеющих более, чем богатый 15-летний опыт работы в данной области. Все наши сотрудники имеют специальные беджи, оснащены всем необходимым
                              оборудованием, а также комплектами замков для того, чтобы оказать услуги по замене замков максимально оперативно.</p>
                              <p>В выходные и праздничные дни, вечерами и даже (экстренно) ночью - мы всегда готовы помочь!</p>
                              <img src="/img/skin/collective.png" alt="" class="podpis">
                      </div>
                      <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                          <a data-lightbox="cisa-company"  href="/img/skin/cisa-company.jpg"><img src="/img/skin/cisa-company-sm.jpg" class="img-responsive" alt="Cisa"></a>
                      </div>
                  </div>
            <div class="certificate-one abs" id="cert-special"><a data-lightbox="cisa-company" href="/img/skin/cert.jpg"><img src="/img/skin/cert-sm.jpg" class="img-responsive" alt=""></a></div>
        </div>
          <div class="row">
              <div class="col-xs-12">

            <div class="address-items">


                <div class="address-item">
                    <div class="address-left text-center">
                      <img src="/img/skin/subway-2.png" alt="Metro">
                        <p><span>~</span>&nbsp;850&nbsp;м</p>
                    </div>
                    <div class="address-right">
                      <p class="text-grey">м. Кропоткинская</p>

                      <p class="address-text">г. Москва, Гагаринский <br> пер., д.27<br><?=$site_telephones?> <br> <a href="mailto:Servicezamkov@yandex.ru">Servicezamkov@yandex.ru</a></p>
                    </div>
                </div>

                <div class="address-item">
                    <div class="address-left text-center">
                        <img src="/img/skin/subway-3.png" alt="Metro">
                        <p><span>~</span> 1.7 км</p>
                    </div>
                    <div class="address-right">
                        <p class="text-grey">м. Новые Черемушки</p>

                        <p class="address-text">г. Москва, ул. Академика <br>Пилюгина, д.4<br><?= $site_telephones ?>
                        </p>
                    </div>
                </div>

                <div class="address-item">
                    <div class="address-left text-center">
                        <a target="_blank" href="https://vk.com/public181492164"><img src="/img/skin/vk.svg" width="60" alt="VKontakte CISA"></a>

                    </div>
                    <div class="address-right">
                        <p class="text-grey">ВКонтакте</p>

                        <p class="address-text"><a target="_blank" href="https://vk.com/public181492164">Официальный сервис CISA <br>в ВКонтакте</a></p>
                    </div>
                </div>

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