<?php

/*if($_SERVER['REMOTE_ADDR'] == "95.133.22.126"){
	phpinfo();
}*/

$routes = explode('/',$_SERVER['REQUEST_URI']);
$route = trim($routes[1], '/').'.php';
/*if (!$routes[1]) {
    require_once('./lang/whatIsLang.php'); //baby don`t hurt me
} else {
    $user_lang = $routes[1];
}*/

//$route_to_go = 'main.php';

if(is_file($route)){
    require_once($route);
    die();
}

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

include('config.php'); //там мы зададим переменную $total

?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="yandex-verification" content="69de0e38d61edede" />

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cisa купить замки в Москве по доступным ценам | Ремонт, вскрытие, сервис</title>
	<meta name="description" content="В нашей компании Вы можете купить замки Cisa (Чиза) а также заказать сервис, ремонт, вскрытие и другие услуги по доступным ценам в Москве.">
	<meta name="keywords" content="-">
	
    <!-- Bootstrap -->
    <link href="styles/bootstrap.min.css" rel="stylesheet">
    <!-- Custom css -->
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/lightbox.min.css">


    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/lightbox.min.js"></script>

    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

<script type="text/javascript" src="/exform_ext/exform.js"></script>

<script type="text/javascript">
jQuery(document).ready(function($){
 
 //$('.request_popup').exform({theme:'exf_request_upload', /*wrapper:'request'*/}); 
 $('.request_popup').exform({theme:'exf_request_upload', wrapper:'request_popup'}); 
  
});
</script>

	<!--<script type="text/javascript" src="/exform/exform.js"></script>
	<script type="text/javascript">
	jQuery(document).ready(function($){
	 
	  $('.request_popup').exform({theme:'callback'});

	 //$('.request').exform({theme:'request', wrapper:'request'}); 
	  
	});
	</script>-->
	
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
  <body>
    <section class="section-main" id="main">
      <div class="main-header">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 main-header__items">
              <div class="main-header__item">
                <div class="header-logo">
                  <img src="img/skin/logo.png" alt="Logo">
                    <div class="right header-logo__slogan">Made in Italy since 1926</div>
                </div>
                <p class="main-header__desc">— официальный сервисный <br> центр CISA в России</p>

                  <div class="btn-group main-header__btns">
                      <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Меню сайта <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" id="scroller">
                          <li><a href="#main">Главная</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="#about">О нас в цифрах</a></li>
                          <li><a href="#price-services">Цены на услуги</a></li>
                          <li><a href="#find-master">Найти мастера</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="#catalog">Каталог CISA</a></li>
                          <li><a href="#eight-facts">8 фактов о CISA</a></li>
                          <li><a href="#pricelist">Прайс-лист CISA</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="#contacts">Найти сервисный центр</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="tel:<?=$site_telephones?>" ><?=$site_telephones?></a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="/cisa-best-lock-for-families" >Лучший замок для молодоженов </a></li>
                          <li><a target="_blank" href="<?=$site_group_vk_link?>" >CISA ВКонтакте <img src="/img/skin/vk.svg" width="22" alt="Официальный сервис CISA Вконтакте"></a></li>
                      </ul>
                  </div>


              </div>
              <div class="main-header__item hidden-xs">
                <p class="main-header__time">ежедневно <br>9:00 &mdash; 19:00</p>
                <a href="tel:<?=$site_telephones?>" class="main-header__phone"><?=$site_telephones?></a>
                  <a target="_blank" href="<?=$site_group_vk_link?>" ><img src="/img/skin/vk.svg" width="40" alt="Официальный сервис CISA Вконтакте"></a>
              </div>
            </div>
          </div>
            <div class="row visible-xs center">
                <div class="col-xs-12">
                    <div class="main-header__item center">
                        <p class="main-header__time">ежедневно <br>9:00 &mdash; 19:00</p>
                        <a href="tel:<?=$site_telephones?>" class="main-header__phone"><?=$site_telephones?></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="stamp">
          <img src="img/skin/stamp.png" alt="">
        </div>
      </div>

      <div class="main-tabs">
        <div class="main-tab main-tab1 main-tab__active" data-number="1" data-href="#price-services">
          <div class="main-tab__header">
            <span class="main-tab__number">01</span>
            <p class="main-tab__title">Монтаж, установка, вскрытие, сервис замков CISA</p>
          </div>
          <div class="main-tab__buttons">
            <button class="main-cta popup-open">Получить услугу</button>
            <a href="#pricelist" class="main-link">Прайс-лист</a>
          </div>

          <div class="tab-img">
            <img src="img/skin/main-item1-img.png" alt="">
          </div>
        </div>

        <div class="main-tab main-tab2" data-number="2" data-href="#catalog">
          <div class="main-tab__header">
            <span class="main-tab__number">02</span>
            <p class="main-tab__title">Продажа цилиндров и замков CISA</p>
          </div>
          <div class="main-tab__buttons">
            <button class="main-cta popup-open">Помощь в выборе</button>
            <a href="#catalog" class="main-link">Выбрать каталог</a>
          </div>

          <div class="tab-img">
            <img src="img/skin/main-item2-img.png" alt="">
          </div>
        </div>

        <div class="main-tab main-tab3" data-number="3" data-href="#pricelist">
          <div class="main-tab__header">
            <span class="main-tab__number">03</span>
            <p class="main-tab__title">Изготовление дубликатов ключей CISA</p>
          </div>
          <div class="main-tab__buttons">
            <button class="main-cta popup-open">Заказать дубликат</button>
            <a href="#pricelist" class="main-link">Прайс-лист</a>
          </div>

          <div class="tab-img">
            <img src="img/skin/main-item3-img.png" alt="">
          </div>
        </div>

        <div class="main-certificate abs" id="cert-main"><a data-lightbox="cisa-company" href="img/skin/cert.jpg">сертификат</a></div>

      </div>

	  <h1 class="h1_cen">Замки Cisa</h1>
	  
      <div class="main-arrow main-arrow_guarantee">
          <p>Фирменная гарантия на наши услуги — до 2х лет!</p>
      </div>
      <div class="main-arrow">
        <a href="#about"><img src="img/skin/arrow-icon.png" alt="Arrow"></a>
      </div>

      <div class="main-bg main-bg1 main-bg__active"></div>
      <div class="main-bg main-bg2"></div>
      <div class="main-bg main-bg3"></div>
    </section>
	
	
    <section id="about" class="section-about">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class=" about-item about-item1">
                        <span>89 000</span>
                        <p class="text-grey">цилиндров CISA<br>продано с 2002 года</p>
                    </div>

                    <div class=" about-item about-item2">
                        <span>377 500</span>
                        <p class="text-grey">ключей CISA продано<br>с 2002 года</p>
                    </div>

                    <div class=" about-item about-item3">
                        <span>5 100</span>
                        <p class="text-grey">дубликатов сделано в<br>наших сервисах с 2002<br>года</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12"><br></div>
            </div>
			
	  </div>
	</section>
      
	
			
			
			
			
			
			
			<!---------------->
			

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<!------------------------------->
	
	
    <section id="catalog" class="section-catalog">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 line"></div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h2 class="f_40">Каталоги CISA</h2>
            <div class="catalog-items">
              <div class="catalog-item">
                <div class="catalog-photo">
                    <a href="/img/catalog_cisa.xlsx"><img src="img/skin/catalog-1.png" alt="Catalog"></a>
                </div>
                <div class="catalog-text">
                  <p>Замки для стальных дверей</p>
                  <span class="catalog-link"><a href="/img/catalog_cisa.xlsx">скачать каталог</a></span>
                </div>
              </div>

              <div class="catalog-item">
                <div class="catalog-photo">
                    <a href="/img/catalog_cisa.xlsx"><img src="img/skin/catalog-2.png" alt="Catalog"></a>
                </div>
                <div class="catalog-text">
                  <p>Цилиндры</p>
                  <span class="catalog-link"><a href="/img/catalog_cisa.xlsx">скачать каталог</a></span>
                </div>
              </div>

              <div class="catalog-item">
                <div class="catalog-photo">
                    <a href="/ehlektromekhanicheskie-zamki"><img src="img/skin/catalog-3.png" alt="Catalog"></a>
                </div>
                <div class="catalog-text">
                  <p><a href="/ehlektromekhanicheskie-zamki">Электромеханические замки</a></p>
                  <span class="catalog-link"><a href="/img/catalog_cisa.xlsx">скачать каталог</a></span>
                </div>
              </div>

              <div class="catalog-item">
                <div class="catalog-photo">
                    <a href="/img/catalog_cisa.xlsx"><img src="img/skin/catalog-4.png" alt="Catalog"></a>
                </div>
                <div class="catalog-text">
                  <p>Системы мастер-ключ</p>
                  <span class="catalog-link"><a href="/img/catalog_cisa.xlsx">скачать каталог</a></span>
                </div>
              </div>

              <div class="catalog-item">
                <div class="catalog-photo">
                    <a href="/vreznye-zamki"><img style="max-width: 135px;margin-left: 19px;" src="img/skin/image001.png" alt="Catalog"></a>
                </div>
                <div style="margin-left: 30px;" class="catalog-text">
                  <p><a href="/vreznye-zamki">Врезные замки</a></p>
                  <!-- <span class="catalog-link"><a href="/img/catalog_cisa.xlsx">скачать каталог</a></span> -->
                </div>
              </div>

              <div class="catalog-item">
                <div class="catalog-photo">
                    <a href="/navesnye-zamki"><img style="max-width: 135px;margin-left: 19px;" src="img/skin/image079.png" alt="Catalog"></a>
                </div>
                <div style="margin-left: 30px;" class="catalog-text">
                  <p><a href="/navesnye-zamki">Навесные замки</a></p>
                  <!-- <span class="catalog-link"><a href="/img/catalog_cisa.xlsx">скачать каталог</a></span> -->
                </div>
              </div>

              
            </div>
          </div>
        </div>
      </div>



    </section>
	
	
	




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
                <img src="img/skin/price-long-img.png" alt="">
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
                  <img src="img/skin/pricelist1.png" alt="">
                  <h4>ASIX</h4>

                  <div class="price-item__footer">
                    <p class="price-item__price"><span>=</span> 450 р.</p>
                    <button class="cta-btn popup-open"><span>Получить услугу</span></button>
                  </div>
                </div>
                  <div class="pricelist-block">
                  <img src="img/skin/asixpro-pl.jpg" alt="">
                  <h4>ASIX PRO</h4>

                  <div class="price-item__footer">
                    <p class="price-item__price"><span>=</span> 700 р.</p>
                    <button class="cta-btn popup-open"><span>Получить услугу</span></button>
                  </div>
                </div>

                <div class="pricelist-block">
                  <img src="img/skin/pricelist2.png" alt="">
                  <h4>ASTRAL, ASTRAL S</h4>

                  <div class="price-item__footer">
                    <p class="price-item__price"><span>=</span> 700 р.</p>
                    <button class="cta-btn popup-open"><span>Получить услугу</span></button>
                  </div>
                </div>

                <div class="pricelist-block">
                  <img src="img/skin/pricelist3.png" alt="">
                  <h4>ASTRAL TEKNO</h4>

                  <div class="price-item__footer">
                    <p class="price-item__price"><span>=</span> 1 250 р.</p>
                    <button class="cta-btn popup-open"><span>Получить услугу</span></button>
                  </div>
                </div>

                <div class="pricelist-block">
                  <img src="img/skin/pricelist4.png" alt="">
                  <h4>AP3</h4>

                  <div class="price-item__footer">
                    <p class="price-item__price"><span>=</span> 2 000 р.</p>
                    <button class="cta-btn popup-open"><span>Получить услугу</span></button>
                  </div>
                </div>

                <div class="pricelist-block">
                  <img src="img/skin/pricelist5.png" alt="">
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
                  <img src="img/skin/pricelist6.png" alt="">
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
                  <img src="img/skin/pricelist7.png" alt="">
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
	
	
	
	
	
	
	
	
      <div class="container" id="eight-facts">
        <div class="row">
          <div class="col-xs-12">

            <div class="whitebg eight-facts ">
            <h2 class="f_40">8 фактов о продукции CISA</h2>

              <br>
<ol class="just">
<li>За 24 года - с 1994г. в Россию и страны СНГ поставлено не менее 250.000 замков и 190.000 цилиндров.</li>
<li>Учитывая длительный ресурс изделий, около 60% установленных с 1994г. замков до сих пор надёжно работают;</li>
<li>CISA является лучшим выбором большинства покупателей: российские клиенты выбирают именно CISA среди 4-х основных марок итальянских замков;</li>
<li>За 6 лет, с момента начала продаж в России в 2002г., к 2008г. система быстрой перекодировки NewCambioFacile завоевала 80% рынка итальянских замков в России;</li>
<li>95% владельцев замков CISA при замене замка по естественным причинам, снова выбирают CISA!;</li>
<li>Благодаря бренду CISA в обиход россиян вошли такие понятия как "перекодировка замка", "лазерный ключ" (система Astral), "пиновая накладка" (штифтовой цилиндр DoppiaMappa);</li>
<li>Замки, цилиндры и системы "антипаника" CISA применяются повсеместно - в новостройках, бизнес-центрах, АЭС, объектах пенитенциарной системы;</li>
<li>Оснащение квартирных и коттеджных дверей замками CISA позволило предотвратить сотни тысяч краж, поскольку затраты времени на взлом двери, укомплектованной высокотехнологичным взломостойким замком CISA, измеряются часами.</li>
</ol>
            </div>
          </div>
        </div>
      </div>
	
	
	
	
	
	
	
	
	
	
	

	
	
	

    <section class="section-banner">
      <div class="banner-item1">
        <img src="img/skin/about-img.jpg" alt="Banner">
      </div>
      <div class="banner-item2">
        <img src="img/skin/logo.png" alt="Logo">
        <h2>Такие разные<br>двери, но один<br>производитель<br>замков</h2>
        <div class="banner-form">
          <p class="text-grey">Закажите замок CISA под ваши нужды у официального диллера в РФ прямо сейчас.</p>
            <p>&nbsp;</p>
          <button class="cta-btn popup-open"><span>Получить консультацию специалиста</span></button>
          <!--form action="#">
            <input type="text" name="name" placeholder="Ваше имя">
            <input type="tel" name="phone" placeholder="+7">
            <button class="cta-btn"><span>Получить консультацию специалиста</span></button>
          </form-->
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
              <img src="img/skin/rs3-s.png" alt="">
            </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="opredelenie-item">
              <h4>AP3 S</h4>
              <img src="img/skin/ap3-s.png" alt="">
            </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="opredelenie-item">
              <h4>Astral S</h4>
              <img src="img/skin/astral-s.png" alt="">
            </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="opredelenie-item">
              <h4>Asix</h4>
              <img src="img/skin/asix.png" alt="">
            </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="opredelenie-item">
              <h4>Astral Tekno</h4>
              <img src="img/skin/astral-tekno.png" alt="">
            </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="opredelenie-item">
              <h4>Asix Pro</h4>
              <img src="img/skin/asix-pro.png" alt="">
            </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="opredelenie-item">
              <h4>Перекодируемые замки (Basic)</h4>
              <img src="img/skin/Basic.png" alt="">
            </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="opredelenie-item">
              <h4>Перекодируемые замки (ALPS)</h4>
              <img src="img/skin/alps.png" alt="">
            </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="opredelenie-item">
              <h4>Antipicking</h4>
              <img src="img/skin/Antipicking.png" alt="">
            </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="opredelenie-item">
              <h4>Монтажный ключ</h4>
              <img src="img/skin/montazh-key.png" alt="">
            </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="opredelenie-item">
              <h4>Неперекодируемые замки</h4>
              <img src="img/skin/neperekod-key.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
	
	
	
	
	
    <section id="about" class="section-about">
        <div class="container">
	
			
            <div class="row">
                <div class="col-xs-12">
                    <div class="whitebg">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <p class="like_h3">Горе-ремонтники или фатальная ошибка владельца двери</p>
                                <br>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-3">
                                <img src="/img/skin/news-gore.jpg" class="img-responsive" alt="Горе-ремонтники или фатальная ошибка владельца двери">
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-9">
                                <p class="just">Каждый из владельцев дверей хотя бы раз в жизни, скорее всего, сталкивался с крайне неприятной ситуацией: родная дверь, привычно допускающая вас в дом, вдруг перестала открываться ! Такое случается, как правило, в силу многих причин — Вы забыли ключи дома; потеряли ключи; ключи были украдены; испортился замок.. Существуют ещё причины отказа двери пускать своего хозяина - такие, как рейдерство, когда неизвестные мошенники меняют замки в дверях офиса, дома или мастерской, а также выселение неплательщиков или неверных супругов, но в рамках данной истории мы рассматривать такие случаи не будем.</p>
                                <p class="just">Итак, дверь не распахивается перед её владельцем, ключ не поворачивается или вообще не желает входить в замок, а её пользователь, как правило, впадает в панику и, находясь в состоянии стресса, начинает <a target="_blank" href="https://www.cisa-russia.com/new/Novosti-Cisaru/gore-remontniki-ili-fatalnaya-oshibka-vladeltca-dveri/">выполнять следующие действия...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			
            <div class="row">
                <div class="col-xs-12"><br></div>
            </div>
            <!--<div class="row">
                <div class="col-xs-12">
                    <div class="whitebg">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <p class="like_h3">Заявление в связи с коронавирусом (COVID-19)</p>
                                <br>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 just">
                                <p>Уважаемые клиенты!</p>
                                <p>Сервисный центр CISA доводит до вашего сведения, что в связи с пандемией, затронувшей производственные площадки и смежников компании CISA, производство замков, цилиндров и других систем запирания временно приостановлено. Предполагаемый запуск производств - не ранее 20 апреля текущего года.</p>
                                <p> В связи с вышеуказанным, ожидаются временные задержки в поставках подавляющего большинства продукции из ассортимента систем безопасностию.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
            <div class="row">
                <div class="col-xs-12"><br></div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="whitebg">
                        <div class="row just">
                            <div class="col-xs-12 col-sm-12">
                                <p class="like_h3">&laquo;Украли ключи! Что делать?!&raquo; &mdash; советы специалистов по безопасности.</p>
                                <br>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">

                                <p>С приближением долгожданных новогодних каникул на россиян ложится важная миссия &mdash; приобрести подарки для родных и близких,
                                    и заготовить весь необходимый набор для праздничного стола. Особо продвинутые покупатели стараются озаботиться вопросами шопинга
                                    ещё за 1-2 недели, чтобы не принимать участия в народной новогодней забаве &mdash; стоянии в длинных очередях на кассу.</p>
                                <p>Некоторые горожане, всё же, предпочитают заняться загрузкой тележек в супермаркетах в последний уикенд или в последний
                                    предпраздничный день &mdash; 31 декабря, когда нервы хозяек накалены до предела.</p><br>
                                <p><img src="/img/skin/news/many-people.jpg" class="img-responsive img-rounded" alt=""></p>
                                <br>
                                <p>Типичная ситуация в супермаркете: на исходе второй час "затарки", в залах магазина уютно и, по-домашнему, тепло, вторая
                                    тележка почти заполнена шампанским и ингредиентами для оливье, верхняя одежда и сумки покоятся на ручках тележек, супруги
                                    разбегаются по ближайшим отделам в поисках искомых деликатесов. Всё внимание покупателей сфокусировано на точном выполнении
                                    продовольственной программы: казалось бы, все посетители магазина пришли с одной целью &mdash; закупить 100% продуктового набора
                                    к всенародно любимому празднику.</p>
                                <p>Однако, выясняется, что не все пришли в магазин за продуктами: к сожалению, некоторые визитёры охотятся не за шампанским и мандаринами,
                                    но за кошельками и шубами честных покупателей. Разумеется, каждый покупатель должен понимать, что солидную долю заботы о его безопасности
                                    берёт на себя сам супермаркет &mdash; сотрудники его службы безопасности стараются зорко следить за соблюдением законности,
                                    но по большей части, их основная забота &mdash; это предотвращение краж товара, находящегося на полках супермаркета, а не денег и ценностей покупателей.</p>

                                <p>Пусть ваши мысли о безопасности не нарушает даже окрик кассира &laquo;Вы забыли взвесить мандарины!&raquo; &mdash; если решитесь бежать
                                    к весам, то не бросайте свои вещи на кассе !</p>

                                <p>Сутолока и кутерьма в залах супермаркета смогут стать отличным подспорьем для воров: быстро затеряться в толпе не составит особого труда.</p>

                                <ul class="list-cisa ol-in-text">
                                    <li><b>Совет №1:</b> не оставляйте свои вещи без присмотра на тележках: для кражи сумочки или кошелька достаточно всего 10-20 секунд.</li>
                                    <li><b>Совет №2:</b> если кто-то успел завладеть вашими вещами, всегда стоит не только заявить в отделение полиции, но и оперативно проверить наличие паспорта и ключей от дома: имея ключи и паспорт с пропиской, особо отмороженные преступники-гастролёры могут быстро наведаться к Вам домой, зная о том, что Вы обязательно потеряете время в поисках "где-то потерянных" ключей и обращении в ЧОП магазина.</li>
                                    <li><b>Совет №3:</b> при обнаружении пропажи ключей и паспорта, следует немедленно отправляться домой! Если дома находится кто-то из членов семьи, особенно, дети - нужно сообщить им, что не следует открывать двери никому, кроме вас; при наличии задвижки - закрыть дверь на неё; если замок открывается изнутри при помощи ключа - вставить ключ в замок изнутри и сделав 1 поворот, оставить ключ внутри.</li>
                                    <li><b>Совет №4:</b> По пути домой, вызвать мастера из официального Сервисного Центра CISA по телефону <?=$site_telephones?>, чтобы заказать замену замков (цилиндра) или перекодировку: к счастью, перекодировка сувальдного замка CISA New Cambio выполняется мастером СЦ быстро и профессионально.</li>
                                    <li><b>Совет №5:</b> Зачастую, выходя из квартиры для проведения салюта в честь наступившего Нового Года, хозяева квартир оставляют ключи в замке и вспоминают о них только 2-3 января, собираясь в гости или на прогулку. При этом, для снятия слепка с ключей профессионалу требуется всего 5 минут. Если ключи провисели снаружи двери в замке несколько часов или были найдены Вами в подъезде, то высока доля вероятности того, что они были скомпрометированы, поэтому, самое правильное решение - это заменить или перекодировать замок, тем более, что все процедуры выполняются мастерами оперативно, благодаря унификации размеров замков CISA.</li>
                                    <li><b>Совет №6:</b> Старайтесь не доверять организациям, не имеющим аккредитации компании CISA: в последние годы возникло множество фирм-однодневок, выдающих себя за "официальные сервисные центры", но на поверку, не имеющие к CISA ни малейшего официального отношения. Всегда требуйте предъявить сертификат (показан на нашем сайте) и избежите всех проблем, связанных с оказанием сомнительных услуг неизвестными лицами".</li>
                                </ul>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12"><br></div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="whitebg">
                    <h3>Обзор замков для стальных дверей</h3>
                        <h4>Безопасность &mdash; это CISA!</h4>
                        <iframe width="560" height="360" src="https://www.youtube.com/embed/6uURXl82-T4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="whitebg">
                        <h3>Описание модельного ряда цилиндров CISA</h3>
                        <h4>Безопасность &mdash; это CISA!</h4>
                        <iframe width="100%" height="360" src="https://www.youtube.com/embed/_7xJCNJ8r5o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-xs-12"><br></div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="whitebg">
                        <h3>CISA 57.986 держал атаку СБУ Украины</h3>
                        <h4>Взломостойкость &mdash; 45 минут!</h4>
                        <iframe width="100%" height="360" src="https://www.youtube.com/embed/P3rdA79yWoE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="whitebg">
                    <h3>&laquo;Чудо Техники&raquo; (НТВ) о замках Cisa</h3>
                        <h4>Взломостойкость &mdash; 1 час!</h4>
                    <iframe width="100%" height="360" src="https://www.youtube.com/embed/TvAoh_8HouM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-xs-12"><br></div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="whitebg">
                        <div class="row just">
                            <div class="col-xs-12 col-sm-12">
                                <h3 class="left">Высокая точность, защита от большинства способов вскрытия и привлекательный дизайн: CISA представляет новый цилиндр AP4S</h3>
                                <br>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-9">
                                <p>Весной текущего года инженеры компании CISA запатентовали и подготовили к производству новый цилиндровый механизм AP4S, созданный на базе успешного решения AP3S.</p>

                                <p>Новое изделие унаследовало все достоинства прежнего цилиндра:</p>

                                <ul class="list-cisa">
                                    <li>11 закалённых стальных штифтов механизма секретности, расположенных в вертикальной и горизонтальной проекциях;</li>
                                    <li>защиту от перелома – запатентованную «рессору» Sigillo, изготовленную из 7 стальных полос, повышающую стойкость цилиндра к перелому и вырыванию на 35%;</li>
                                    <li>защиту от вскрытия методом «бампинг» - ВКР;</li>
                                    <li>защиту от вскрытия методом снятия восковых слепков;</li>
                                    <li>защиту от высверливания – 11 стальных штифтов + 2 горизонтальных штифта в сердечнике (обеспечивают перелом сверла);</li>
                                    <li>40.000.000 комбинаций кода;</li>
                                    <li>защиту от несанкционированного копирования ключей;</li>
                                    <li>прочные ключи из мельхиора с новым интерактивным элементом и защитой товарного знака.</li>
                                </ul>

                                <p>Кроме того, ключи цилиндра AP4S изготовлены из нового профиля, что обеспечивает покупателя 100% уверенностью в неосуществимости любых попыток нелегального изготовления копий ключей AP4S из «похожих» заготовок.</p>

                                <p>Головки ключей цилиндров CISA AP4S стали несколько больше, что расширяет возможности по нанесению логотипа компаний-партнёров CISA.</p>

                                <p>Кроме того, в головку ключа имплантирована симпатичная вставка из полупрозрачного красного пластика.</p>

                                <p>Также возможно заказать вставки иных цветов, по желанию партнёров и клиентов CISA.</p>

                                <p>Появление новинки ожидается на складах наших официальных дилеров уже в ноябре текущего года.</p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <p><a class="pdf-link" href="/img/skin/news/Brochure_AP4S_rus.pdf"><img src="/img/skin/news/ap4s_1.jpg" alt="" class="img-responsive"></a></p>
                                <p><a class="pdf-link" href="/img/skin/news/Leaflet_AP4S_rus.pdf"><img src="/img/skin/news/ap4s_2.jpg" alt="" class="img-responsive"></a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12"><br></div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="whitebg">
                        <div class="row just">
                            <div class="col-xs-12 col-sm-12">
                                <h3>Система &laquo;мастер-ключ&raquo;</h3>
                                <br>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <p>&laquo;Мастер-Ключ&raquo; – система организации доступа в помещения, базирующаяся на использовании цилиндровых механизмов секретности (ЦМС, цилиндров)  позволяющая контролировать доступ . В основе системы – комплекс замков и ключей, имеющих заранее определенные и закрепленные права доступа. Одному замку может быть сопоставлено несколько ключей. Также один ключ может открывать несколько замков, расположенных в разных местах и не связанных между собой.</p>
                                <p>Система Мастер-Ключ обеспечивает владельцу защиту от несанкционированного проникновения лиц, не имеющих права нахождения на охраняемом объекте.</p>
                                <p>Как дополнительная функция – разграничение доступа на объекты или в помещения предприятия для сотрудников, имеющих разные права и служебные обязанности, с учётом требований по иерархии и безопасности.</p>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-5">
                                <img src="/img/skin/news/mks.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3">
                                <p>Каждому лицу вручаются исключительно те ключи, которыми можно открывать двери в помещения, куда разрешён доступ.</p>
                                <p>Система Мастер-ключ обладает определённой гибкостью и может быть подвергнута модификации – как то: расширена, изменена, при определённых остоятельствах может быть исключён доступ лиц (ключей).</p>
                                <p>В случае надобности, при правильно составленной схеме запирания и бережном хранении информации о кодах штифтов, систему возможно расширить, добавляя новых абонентов – замки и ключи.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12"><br></div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="whitebg">
                        <div class="row just">
                            <div class="col-xs-12 col-sm-12">
                                <h3>Применение замка CISA для ремонта стальной двери</h3>
                                <br>
                                <p>Общеизвестно, что в период летних каникул у квартирных воров в разы возрастает интерес к завладению чужим имуществом. В поле зрения преступников попадают излюбленные предметы - от дорогостоящих образцов бытовой техники и торопливо спрятанной наличности до предметов женского гардероба. В данном случае  опишем попытку преступников завладеть содержимым тамбура в многоквартирном доме. Тамбур в обычной девятиэтажке на Востоке Москве вмещал в себя небольшой набор спортивного инвентаря - пару велосипедов, санки, закреплённые на стене, а также хозяйскую осеннюю куртку и полочку для обуви. Система запирания данной двери была представлена широко распространённым замком Ш-025 Барановичского завода.</p>
                                <p>Неизвестно, чем руководствовался воришка - желанием прокатиться на велосипеде или убеждением  в том, что именно в тамбуре хозяева хранят несметные богатства, но взлом-таки состоялся: крайне низкая взломостойкость указанных замков широко известна среди домушников.</p>
                                <p>Печально, но факт: совсем не многие домовладельцы имеют представление об истинных свойствах своих замков и дверей, не обращая внимания на моральное и физическое устаревание систем запирания квартир.</p>
                                <p>К счастью, то ли велосипеды оказались не той марки, то ли кто-то спугнул неудачливого "медвежатники", но все остались при своём: велосипеды не поменяли седока, куртка всё так же ждёт осени... Только замок Ш-025 пришёл в полную негодность. Но и это не беда - на смену устаревшему замку был установлен замок CISA 52.521.50 со специальной взломостойкой ручкой с защитной накладкой и цилиндром CISA серии AP4S. Замок 52.521 оснащён 3 прочными стальными засовами-ригелями и под защитой новой антивандальной ручки способен выдержать  атаку любого воровского инструмента. С замком CISA Ваша собственность под надёжной защитой !</p>
                            </div>
                        </div>
                        <div class="row nomargin news-images">
                            <div class="col-xs-6 col-sm-4 col-md-2"><a href="/img/skin/news/news-1-1.jpg" data-lightbox="news1"><img src="/img/skin/news/news-1-1.jpg" class="img-responsive" alt=""></a></div>
                            <div class="col-xs-6 col-sm-4 col-md-2"><a href="/img/skin/news/news-1-2.jpg" data-lightbox="news1"><img src="/img/skin/news/news-1-2.jpg" class="img-responsive" alt=""></a></div>
                            <div class="col-xs-6 col-sm-4 col-md-2"><a href="/img/skin/news/news-1-3.jpg" data-lightbox="news1"><img src="/img/skin/news/news-1-3.jpg" class="img-responsive" alt=""></a></div>
                            <div class="col-xs-6 col-sm-4 col-md-2"><a href="/img/skin/news/news-1-4.jpg" data-lightbox="news1"><img src="/img/skin/news/news-1-4.jpg" class="img-responsive" alt=""></a></div>
                            <div class="col-xs-6 col-sm-4 col-md-2"><a href="/img/skin/news/news-1-5.jpg" data-lightbox="news1"><img src="/img/skin/news/news-1-5.jpg" class="img-responsive" alt=""></a></div>
                            <div class="col-xs-6 col-sm-4 col-md-2"><a href="/img/skin/news/news-1-7.jpg" data-lightbox="news1"><img src="/img/skin/news/news-1-7.jpg" class="img-responsive" alt=""></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12"><br></div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="whitebg">
                        <div class="row just">
                            <div class="col-xs-12 col-sm-8">
                                <a href="/cisa-best-lock-for-families">
                                    <img src="/img/skin/page/third-img.png" class="img-responsive" alt="">
                                </a>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <p class="left"><a href="/cisa-best-lock-for-families" class="cisa-56013-link link-to-page">CISA 56.013 &mdash; первый замОк для новоселов</a></p>
                                <br>
                                <p>При покупке квартир на вторичном жилье, новым владельцам недвижимости зачастую достаются входные стальные двери родом из 90-х - это весьма архаичные изделия кустарных мастерских-кооперативов, возникших на обломках некогда мощной советской индустрии.
                                </p>
                                <a href="/cisa-best-lock-for-families">А в наши дни?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12"><br></div>
            </div>
            <div class="row">
                <div class="col-xs-12">

                    <div class="whitebg">
                        <div class="row just">
                            <div class="col-xs-12 ">
                                <img src="/img/skin/narmar.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-7 whitebg-special-block">
                                <h3 class="left">Мастер-системы CISA на нефтяном месторождении</h3>
                                <p>В 2010 году перед специалистами фирмы "CISA" была поставлена сложная задача. Предстояло переоборудовать системы замков с
                                    функцией "антипаника"
                                    на технологических модулях нефтянного завода в условиях Заполярья в Ненецком АО.</p>
                                <p>На заводе были установлены устаревшие и неисправные замки с функцией "антипаника" разных производителей: NEMEF, MOTTURA,
                                    APECS и др. По
                                    требованию Заказчика их нужно было заменить на замки одного производителя, а именно "CISA".</p>
                                <p>Специалисты нашей фирмы вылетели на объект Заказчика - Харьягинское нефтяное месторождение ,где провели инвентаризацию
                                    технологических
                                    модулей завода .</p>
                                <p>В Москве были подобраны варианты замков с функцией "антипаника" фирмы "CISA" и отправили в Ненецкий АО. Нашими специалистами
                                    были выполнены
                                    все работы в срок и без замечаний.</p>
                                <p>Кроме производства работ наши специалисты участвовали во всех мероприятиях по ТБ, пожарных и газовых тревогах, сдавали
                                    зачеты. В
                                    последствии фирма "CISA" на протяжении многих лет осуществляла гарантийное и постгарантийное обслуживание более 80 систем с
                                    функцией
                                    "антипаника" CISA на месторождении.</p>
                                <p>В дальнейшем полученный опыт был применен на сотнях объектах в Москве и области.</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="section-mesto">
      <div class="container">
        <div class="row just">
          <div class="col-xs-12 col-sm-8 mesto-cont">
            <img src="img/skin/logo.png" alt="Logo">
            <h2 class="left">Прекрасная идея подарка &mdash; реновация входной двери.</h2>
            <p class="text-grey">В преддверии любого праздника, большинство горожан задумывается о том, какие подарки преподнести своей семье, родным и близким. Чаще всего, на ум приходит ставший в последние десятилетия стандартный набор: бытовая кухонная техника и новый широкоэкранный телевизор самого последнего поколения. Купив эти чудеса технического прогресса, их счастливые обладатели часто отправляются в предстоящие каникулы подальше от родных мест – покататься на лыжах или освежить летний загар на тёплых морях.</p>

            <div class="row mesto-text">
              <div class="col-xs-12 col-sm-6">
                  <p>При этом, мысль о недостаточности защиты квартиры или дома порой приходит к владельцам новой дорогостоящей техники лишь в кресле самолёта или купе поезда дальнего следования (ссылка «Дверь» на торчащий из двери цилиндр).</p>
                  <br>
                  <p>Статистика квартирных краж демонстрирует некоторое снижение количества краж за последние 10 лет, но всё так же неутешительна: ежегодно на территории Москвы и области регистрируется от 20 000 до 25 000 квартирных краж, совершаемых, в основном, после покидания квартир владельцами – с  10.00 до 13.00.</p><br>
                  <p>Новогодние каникулы и период летних отпусков также являются любимыми временами года у квартирных воров для сбора криминального «урожая». Пользуясь входной дверью всего 5-15 секунд в день (в процессе её открывания и закрывания), мы мало задумываемся об уровне безопасности, которая она обеспечивает. Зачастую, замки, установленные во входные двери более 10-15 лет назад, уже безнадёжно устарели или катастрофически изношены. Безопасность жизни и имущества жителей домов и квартир во многом зависит от них самих, поэтому требует периодического, но самого пристального внимания.</p><br>
                  <p>В описываемом случае, речь идёт о комплексном проекте – замене морально и физически устаревшей отделке двери популярной в 90-е винилкожей и оснащении двери наиболее эффективными системами запирания. Вероятнее всего, данная дверь была изготовлена в середине 90-х годов прошлого века и была оснащена самыми распространёнными на тот момент замками. На текущий момент времени, цилиндровый механизм нижнего замка был изношен настолько, что мог открываться чужими ключами похожего профиля. Верхний замок с крестовым ключом типа Prazis, был неисправен настолько, что хозяева предпочитали не пользоваться им более 4-х лет. </p>

              </div>

              <div class="col-xs-12 col-sm-6">
                  <p>Таким образом, дверь фактически представляла собой лишь визуальную преграду для пытливых взглядов.</p><br/>
                  <p>Именно поэтому было принято решение о серьёзном апгрейде двери, без её шумного демонтажа и замены на новое изделие. Для замены верхнего замка с крест-ключом был применён замок CISA 56.013.50, оснащённый комплексной защитой – пластиной защиты замка CISA типа «шеврон», врезной броненакладкой CISA 06.490 и новейшим цилиндром CISA AP4S.</p><br>
                  <p>Благодаря особенности конструкции цилиндра CISA AP4S - наличию регулируемого хвостовика (штока), специалистам легко удалось подобрать цилиндр нужной длины.    Длинная лицевая планка замка 56.013.50 позволила с избытком перекрыть монтажное окно старого замка. Защитная пластина CISA типа «шеврон» надёжно защитит корпус замка от сверления в обход броненакладки. Вместо нижнего замка с ручкой на планке применили замок с трёхригельным засовом - CISA 52.521.50, цилиндром CISA RS3S, броненакладкой CISA 06.490 и непременной пластиной защиты замка CISA типа «шеврон». Место прежних ручек заняли современные ручки на розетке. Цвет ручек, броненакладок и остальной фурнитуры – «бронза».</p><br>
                  <p>Можно не сомневаться, что обновлённая дверь не только понравится всей семье, но и послужит весьма долго : благодаря выдающемуся ресурсу замков и цилиндров CISA в 100.000 циклов, дверь сможет украшать и защищать дом более 15 лет.</p><br>
                  <p>Подводя итого эксперимента по реновации двери из 90-х, можно заключить : безопасность может быть не только важнейшим аспектом жизни, но и формой гармонизации пространства.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mesto-img">
        <img src="img/skin/mesto-img.png" alt="" class="img-responsive">
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
                      <img src="img/skin/find-icon.png" alt="Find">
                    </div>
                  </div>

                  <div class="findmaster-body">
                    <div class="findmaster-body__wrap">
                      <div class="findmaster-photo">
                        <!--<img src="img/skin/master-photo.png" alt="Master">-->
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
                              <img src="img/skin/collective.png" alt="" class="podpis">
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
                      <img src="img/skin/subway-2.png" alt="Metro">
                        <p><span>~</span>&nbsp;850&nbsp;м</p>
                    </div>
                    <div class="address-right">
                      <p class="text-grey">м. Кропоткинская</p>

                      <p class="address-text">г. Москва, Гагаринский <br> пер., д.27<br><?=$site_telephones?> <br> <a href="mailto:Servicezamkov@yandex.ru">Servicezamkov@yandex.ru</a></p>
                    </div>
                </div>

                <div class="address-item">
                    <div class="address-left text-center">
                        <img src="img/skin/subway-3.png" alt="Metro">
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

              <!--<div class="address-item">
                <div class="address-left text-center">
                  <img src="img/skin/subway-3.png" alt="Metro">
                  <p><span>~</span> 1.7 км</p>
                </div>
                <div class="address-right">
                  <p class="text-grey">м. Пушкинская</p>
                  <p class="address-text">Тверская 12, ст. 2<br>+7 (919) 223-78-12 (ЦАО)<br>+7 (495) 661-14-97 (единый)</p>
                </div>
              </div>

              <div class="address-item">
                <div class="address-left text-center">
                  <img src="img/skin/subway-1.png" alt="Metro">
                  <p><span>~</span> 1.7 км</p>
                </div>
                <div class="address-right">
                  <p class="text-grey">м. Пушкинская</p>
                  <p class="address-text">Тверская 12, ст. 2<br>+7 (919) 223-78-12 (ЦАО)<br>+7 (495) 661-14-97 (единый)</p>
                </div>
              </div>

              <div class="address-item">
                <div class="address-left text-center">
                  <img src="img/skin/subway-2.png" alt="Metro">
                  <p><span>~</span> 1.7 км</p>
                </div>
                <div class="address-right">
                  <p class="text-grey">м. Пушкинская</p>
                  <p class="address-text">Тверская 12, ст. 2<br>+7 (919) 223-78-12 (ЦАО)<br>+7 (495) 661-14-97 (единый)</p>
                </div>
              </div>-->
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
              <img src="img/skin/logo.png" alt="Logo">
              <p class="footer-desc just">Настоящий сайт и представленные на нем материалы носят исключительно информационный характер и ни при каких условиях не являются публичной офертой, определяемой положениями Статьи 437 Гражданского кодекса Российской Федерации.</p>
            </div>

            <div class="footer-item text-right">
              <img src="img/skin/footer-img.png" alt="Footer">
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
                <p>&nbsp;</p>
                <p>Нажимая кнопку, я принимаю <a href="/img/skin/consent-cisa.pdf" target="_blank" class="popup-form-link">соглашение о конфиденциальности</a> и соглашаюсь с обработкой персональных данных</p>

              <div class="popup-form">
			  <!--<div class="request_popup"></div>-->
                <form action="/" method="post">
                    <input type="text" class="hidden" name="name" value="Ваше имя">
                    <input type="text" class="hidden" name="login" value="">
                  <input type="text" name="username" placeholder="Ваше имя">
                  <input type="tel" name="usermail" placeholder="+7">
                  <button onclick="ym(66356323, 'reachGoal', 'otpravka'); return true;" class="cta-btn">Отправить</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="popup-close text-center">
          <img src="img/skin/close.png" alt="Close">
          <p>скрыть</p>
        </div>
      </div>

    <script src="js/ed.js"></script>
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