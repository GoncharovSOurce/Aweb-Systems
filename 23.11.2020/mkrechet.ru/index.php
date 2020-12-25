<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.beez3
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

/** @var JDocumentHtml $this */

JLoader::import('joomla.filesystem.file');

// Check modules
$showRightColumn = ($this->countModules('position-3') or $this->countModules('position-6') or $this->countModules('position-8'));
$showbottom      = ($this->countModules('position-9') or $this->countModules('position-10') or $this->countModules('position-11'));
$showleft        = ($this->countModules('position-4') or $this->countModules('position-7') or $this->countModules('position-5'));

if ($showRightColumn === false && $showleft === false)
{
	$showno = 0;
}

JHtml::_('behavior.framework', true);

// Get params
$color          = $this->params->get('templatecolor');
$logo           = $this->params->get('logo');
$navposition    = $this->params->get('navposition');
$headerImage    = $this->params->get('headerImage');
$config         = JFactory::getConfig();
$bootstrap      = explode(',', $this->params->get('bootstrap'));
$option         = JFactory::getApplication()->input->getCmd('option', '');

// Output as HTML5
$this->setHtml5(true);

if (in_array($option, $bootstrap))
{
	// Load optional rtl Bootstrap css and Bootstrap bugfixes
	JHtml::_('bootstrap.loadCss', true, $this->direction);
}

// Add stylesheets
JHtml::_('stylesheet', 'templates/system/css/system.css', array('version' => 'auto'));
JHtml::_('stylesheet', 'position.css', array('version' => 'auto', 'relative' => true));
JHtml::_('stylesheet', 'layout.css', array('version' => 'auto', 'relative' => true));
JHtml::_('stylesheet', 'print.css', array('version' => 'auto', 'relative' => true), array('media' => 'print'));
JHtml::_('stylesheet', 'general.css', array('version' => 'auto', 'relative' => true));
JHtml::_('stylesheet', htmlspecialchars($color, ENT_COMPAT, 'UTF-8') . '.css', array('version' => 'auto', 'relative' => true));

if ($this->direction === 'rtl')
{
	JHtml::_('stylesheet', 'template_rtl.css', array('version' => 'auto', 'relative' => true));
	JHtml::_('stylesheet', htmlspecialchars($color, ENT_COMPAT, 'UTF-8') . '_rtl.css', array('version' => 'auto', 'relative' => true));
}

if ($color === 'image')
{
	$this->addStyleDeclaration("
	.logoheader {
		background: url('" . $this->baseurl . "/" . htmlspecialchars($headerImage) . "') no-repeat right;
	}
	body {
		background: " . $this->params->get('backgroundcolor') . ";
	}");
}

JHtml::_('stylesheet', 'ie7only.css', array('version' => 'auto', 'relative' => true, 'conditional' => 'IE 7'));

// Check for a custom CSS file
JHtml::_('stylesheet', 'user.css', array('version' => 'auto', 'relative' => true));

JHtml::_('bootstrap.framework');

// Add template scripts
JHtml::_('script', 'templates/' . $this->template . '/javascript/md_stylechanger.js', array('version' => 'auto'));
JHtml::_('script', 'templates/' . $this->template . '/javascript/hide.js', array('version' => 'auto'));
JHtml::_('script', 'templates/' . $this->template . '/javascript/respond.src.js', array('version' => 'auto'));
JHtml::_('script', 'templates/' . $this->template . '/javascript/template.js', array('version' => 'auto'));

// Check for a custom js file
JHtml::_('script', 'templates/' . $this->template . '/javascript/user.js', array('version' => 'auto'));

require __DIR__ . '/jsstrings.php';

// Add html5 shiv
JHtml::_('script', 'jui/html5.js', array('version' => 'auto', 'relative' => true, 'conditional' => 'lt IE 9'));
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<meta name="HandheldFriendly" content="true" />
		<meta name="apple-mobile-web-app-capable" content="YES" />
		<jdoc:include type="head" />

		<!--link rel="stylesheet" href="/owl-carousel/css/owl.carousel.css"-->
  	
  		<link href="/lightbox/dist/css/lightbox.css" rel="stylesheet">
  		<link href="/slick-1.8.1/slick.css" rel="stylesheet">
		  <link href="/bxslider/jquery.bxslider.css" rel="stylesheet">
  		<link href="/fontawesome/css/all.css" rel="stylesheet">
			<link href="/templates/beez3/css/custom.css" rel="stylesheet">
			<link href="/templates/beez3/css/responsive.css" rel="stylesheet">
		<!--script src="https://api.xab.su/lib/captcha.js"></script-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="/bxslider/jquery.bxslider.min.js"></script>
<!--script src="/bxslider/jquery.easing.1.3.js"></script>
<script src="/bxslider/jquery.fitvids.js"></script-->
		<script src="//code-ya.jivosite.com/widget/flDfjYXA8M" async></script>
	</head>
	<body>
	 <div id="scroller"></div>
		<header class="newheader">
			<div class="wrapper">
				<div class="headergrid">
					<div class="headerlogo headcol">
						<a href="/"><img src="/images/logon.png" alt="" class="hidemob"><img src="/images/logomobile.png" class="hidedesc" alt=""></a>
					</div>
					<div class="headerlogodesc headcol">
						проектирование и изготовление <br>доспехов, костюмов, реквизита,<br>  тематической мебели, отделка<br> интерьеров в Москве
					</div>
					<div class="headersocials headcol">
						<div class="socilalist">
							<a href="https://vk.com/orkshop"><i class="fa fa-vk"></i></a>
							<a href="https://www.facebook.com/workshopkrechet/"><i class="fa fa-facebook"></i></a>
							<a href="https://www.instagram.com/krechet_workshop/"><i class="fa fa-instagram"></i></a>
							<a href="mailto:cosplay40000@gmail.com" class="mailhead">cosplay40000@gmail.com</a>
						</div>
						<div class="watlink">
							<a href="https://api.whatsapp.com/send?phone=89265829845"><img src="/images/whatsap.png" alt=""> Написать в WhatsApp</a>
						</div>
					</div>
					<div class="headerphone headcol">
						<a href="tel:89629294447">8 (962) 929 44 47</a><br>
						<a href="tel:89265829845">8 (926) 582 98 45</a>
					</div>
					<div class="headercallback headcol">
						<a href="/" class="callbackpopup linkcall">Заказать звонок</a>
						<div class="hidedesc watlink">
							<a href="#"><img src="/images/whatsap.png" alt=""> Написать в WhatsApp</a>
						</div>
					</div>
				</div> 
			</div>
		</header>
	
		<div class="topnav">
			<div class="wrapper">
				<div class="spoiler__menu three-line"><i class="fa fa-bars"></i> Меню</div>
				<jdoc:include type="modules" name="topMenu" />
			</div>
		</div>
		<div class="scorllto_btn hidedesc">
			<a href="#sidecat" class="scrollto">Навигация по разделам каталога ‐ жми!</a>
		</div>
	
		<div class="maincontainer">

			<div class="wrapper">
				<div class="maincontainer_grid">
					<div class="maincontainer_col sidebarleft">
						<div class="boxsideabr_title" id="sidecat">Каталог</div>
						<div class="left-menu-category"><jdoc:include type="modules" name="left-menu" /></div>
						<jdoc:include type="modules" name="sidebarmodule" />
					</div>
					<div class="maincontainer_col contentsite">
						 <div class="right-main-content">
						 <?php 
							if ($_SERVER['REQUEST_URI']=='/galereya'){
						 ?>
							<jdoc:include type="modules" name="beforecontent" />
						<?php } ?>
						 <jdoc:include type="component" />
						 </div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="MaxW">
		<jdoc:include type="modules" name="before-footer" />
		</div>
		<?php if ($_SERVER['REQUEST_URI'] == '/galereya/hudozhestvennaya-kovka' ||
					$_SERVER['REQUEST_URI'] == '/galereya/istoricheskaya-rekonstrukciya' ||
					$_SERVER['REQUEST_URI'] == '/galereya/kospley-cosplay'
		){ ?>
			<jdoc:include type="modules" name="before-footer2" />
		<?php } ?>
		<footer class="newfooter">
			<div class="wrapper">
				<div class="footegrid">
					<div class="footloog fotcol">
						<a href="/"><img src="/images/logofooter.png" alt=""></a>
						<div class="footcopy">Все права защищены © 2003-2020</div>
						<div class="footsocials">
							Мы в соцсетях: 
							<a href="https://vk.com/orkshop"><i class="fa fa-vk"></i></a>
							<a href="https://www.facebook.com/workshopkrechet/"><i class="fa fa-facebook"></i></a>
							<a href="https://www.instagram.com/krechet_workshop/"><i class="fa fa-instagram"></i></a>
						</div>
					</div>
					<div class="footadrews fotcol">
						<div class="contacinfoot">Москва, Автомобильный проезд 10 стр 14<br>
						<a href="/contacts" class="seecart">посмотреть на карте</a></div>
						<div class="yaspravochnuk">
							<a href="https://yandex.ru/maps/org/masterskaya_krechet/115296854578/reviews " target="_blank"><img src="/images/yasparvoch.png" alt=""><br>
							Оставьте отзыв</a> о нас<br>
							в Яндекс.Справочнике
							
						</div>
					</div>
					<div class="footlinks fotcol">
						<ul class="footmenu">
							<li><a href="/about">О мастерской </a></li>
		
							<li><a href="/dostavka">Доставка и оплата </a></li>
							<li><a href="/portfolio">Портфолио </a></li>
							<li><a href="/otzuvu">Отзывы </a></li>
							<li><a href="/contacts">Контакты  </a></li>
						</ul>
					</div>
					<div class="footphone fotcol">
						<div class="footfonlinks"><a href="tel:89629294447">8 (962) 929 44 47</a><br>
						<a href="tel:89265829845">8 (926) 582 98 45</a></div>
						<a href="/" class="callbackpopup linkcall">Заказать звонок</a>
						<a href="mailto:cosplay40000@gmail.com" class="fotmail">cosplay40000@gmail.com</a>
						<a href="/privacy-policy">Политика конфиденциальности</a>
					</div>
					
				</div>
			</div>

		</footer>
		
		

		
		
		<jdoc:include type="modules" name="debug" />

		<script type="text/javascript" src="/exform/exform.js"></script>
		<!--script src="/owl-carousel/js/owl.carousel.js"></script-->
		<script src="/slick-1.8.1/slick.min.js"></script>
	<script>
		(function($) {
			 /* jQuery('.carouselimages').bxSlider({
				speed: 1000,
				
			  });*/
			  if ($().slick) {
		
				$('.wordlistrotator').slick({
					infinite: false,
					fade: true,
					slidesToShow: 1,
					speed: 1200,
					dots:false,
					arrows:false,
					adaptiveHeight: true,
					slidesToScroll: 1,
					autoplay: true,
					autoplaySpeed: 2000,
				
				});
				$('.revcarosuel').slick({
					infinite: false,
					fade: false,
					slidesToShow: 1,
					speed: 1200,
					dots:true,
					arrows:false,
					adaptiveHeight: true,
					slidesToScroll: 1,
					responsive: [
						{
						  breakpoint: 1024,
						  settings: {
							slidesToShow: 1,
						  }
						},
						{
						  breakpoint: 640,
						  settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
						  }
						},
					]
				});
				$('.index-slider').slick({
					infinite: false,
					fade: false,
					slidesToShow: 3,
					speed: 1200,
					dots:true,
					arrows:false,
					slidesToScroll: 1,
					responsive: [
						{
						  breakpoint: 1024,
						  settings: {
							slidesToShow: 2,
						  }
						},
						{
						  breakpoint: 640,
						  settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
						  }
						},
					]
				});
				$('.carouselimages').slick({
					infinite: false,
					fade: false,
					slidesToShow: 2,
					speed: 1200,
					dots:true,
					autoplay: true,
					autoplaySpeed: 2000,
					arrows:false,
					slidesToScroll: 2,
					responsive: [
						{
						  breakpoint: 1024,
						  settings: {
							slidesToShow: 2,
						  }
						},
						{
						  breakpoint: 640,
						  settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
						  }
						},
					]
				
				});
			}
		
		  	jQuery('.callback').exform({theme:'callback', wrapper: "callback"});
		    jQuery('.callbackpopup').exform({theme:'new_form_popup'});
			
			jQuery(".spoiler__menu").click(function (event) {
				var currentClickElem = jQuery(event.currentTarget).siblings().get(0);
				   if (jQuery(currentClickElem).is(":hidden")) {
					  jQuery(currentClickElem).show("slow");
				   } else {
					  jQuery(currentClickElem).hide("slow");
				   }
			});
			var $root = $('html, body');

			$('a[href^="#"]').click(function () {
				$root.animate({
					scrollTop: $( $.attr(this, 'href') ).offset().top
				}, 500);

				return false;
			});
			jQuery(window).scroll(function () {
				if (jQuery(this).scrollTop() > 0) {
					jQuery('#scroller').fadeIn();
				} else {
					jQuery('#scroller').fadeOut();
				}
			});
			jQuery('#scroller').click(function () {
				jQuery('body,html').animate({
					scrollTop: 0
				}, 400);
				return false;
			});
		})(jQuery); //jQuery
	</script>



	  		<!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script>  -->
	<script src="/lightbox/dist/js/lightbox.js"></script>
	<!--script>
		var count = $(".for-whom-item").length,
		    i = 1;
		setInterval(function() {
		  i < count ? i++ : i = 1
		  jQuery(".for-whom-item").removeClass("active").eq(i - 1).addClass("active")
		}, 6000);
	</script-->

	<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(28401961, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        trackHash:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/28401961" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->




	</body>
</html>
