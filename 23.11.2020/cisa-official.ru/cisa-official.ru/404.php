<?	header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found"); ?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="yandex-verification" content="69de0e38d61edede" />

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Страница не найдена – 404 ошибка</title>
    <meta name="description" content="Страница не найдена, 404 ошибка. Попробуйте начать с главной страницы." />
    <meta name="keywords" content="404 ошибка" />
	
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
    
  </head>
  <body>
    <section class="section-main" style="min-height: 50vh!important;" id="main">
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

                  <!--<div class="btn-group main-header__btns">
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
                  </div>-->


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
          <img src="/img/skin/stamp.png" alt="">
        </div>
      </div>

      <div style="text-align: center;">
		  <h1>Страница не найдена</h1>
          <p>Страница не найдена, 404 ошибка. Попробуйте начать с <a href="/">главной страницы</a>.</p>
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