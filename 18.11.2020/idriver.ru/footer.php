<?php
/**
 * The footer template.
 *
 * @package Avada
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
					<?php do_action( 'avada_after_main_content' ); ?>

				</div>  <!-- fusion-row -->
			</main>  <!-- #main -->
			<?php do_action( 'avada_after_main_container' ); ?>

			<?php global $social_icons; ?>

			<?php
			/**
			 * Get the correct page ID.
			 */
			$c_page_id = Avada()->fusion_library->get_page_id();
			?>

			<?php
			/**
			 * Only include the footer.
			 */
			?>
			<?php if ( ! is_page_template( 'blank.php' ) ) : ?>
				<?php $footer_parallax_class = ( 'footer_parallax_effect' === Avada()->settings->get( 'footer_special_effects' ) ) ? ' fusion-footer-parallax' : ''; ?>

				<div class="fusion-footer<?php echo esc_attr( $footer_parallax_class ); ?>">
					<?php get_template_part( 'templates/footer-content' ); ?>
				</div> <!-- fusion-footer -->
			<?php endif; // End is not blank page check. ?>

			<?php
			/**
			 * Add sliding bar.
			 */
			?>
			<?php if ( Avada()->settings->get( 'slidingbar_widgets' ) && ! is_page_template( 'blank.php' ) ) : ?>
				<?php get_template_part( 'sliding_bar' ); ?>
			<?php endif; ?>
		</div> <!-- wrapper -->

		<?php
		/**
		 * Check if boxed side header layout is used; if so close the #boxed-wrapper container.
		 */
		$page_bg_layout = ( $c_page_id ) ? get_post_meta( $c_page_id, 'pyre_page_bg_layout', true ) : 'default';
		?>
		<?php if ( ( ( 'Boxed' === Avada()->settings->get( 'layout' ) && 'default' === $page_bg_layout ) || 'boxed' === $page_bg_layout ) && 'Top' !== Avada()->settings->get( 'header_position' ) ) : ?>
			</div> <!-- #boxed-wrapper -->
		<?php endif; ?>
		<?php if ( ( ( 'Boxed' === Avada()->settings->get( 'layout' ) && 'default' === $page_bg_layout ) || 'boxed' === $page_bg_layout ) && 'framed' === Avada()->settings->get( 'scroll_offset' ) && 0 !== intval( Avada()->settings->get( 'margin_offset', 'top' ) ) ) : ?>
			<div class="fusion-top-frame"></div>
			<div class="fusion-bottom-frame"></div>
			<?php if ( 'None' !== Avada()->settings->get( 'boxed_modal_shadow' ) ) : ?>
				<div class="fusion-boxed-shadow"></div>
			<?php endif; ?>
		<?php endif; ?>
		<a class="fusion-one-page-text-link fusion-page-load-link"></a>

		<?php wp_footer(); ?>

<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery("#menu-item-841 > a").on("click",function(){
            jQuery("#nf-field-4").attr("onclick","yaCounter42136669.reachGoal('zakaz'); return true;");
        });
        jQuery(".button-12").on("click",function(){
            jQuery("#nf-field-15").attr("onclick","yaCounter42136669.reachGoal('comment'); return true;");
        })
        jQuery(".button-13").on("click",function(){
            jQuery("#nf-field-21").attr("onclick","yaCounter42136669.reachGoal('comment1'); return true;");
        })
    });
</script>
<script>
	jQuery(document).ready(function(){
        jQuery('#text-57 > div.textwidget.ya-phone').removeClass('ya-phone');
        jQuery('#text-56 > div.textwidget.ya-phone').removeClass('ya-phone');
        jQuery('#text-54 > div.textwidget.ya-phone').removeClass('textwidget');
        jQuery('#text-55 > div.textwidget.ya-phone').removeClass('ya-phone');
	});
</script>
<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script src="/map2.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
    	if(location.href !="https://idriver.ru/"){

        $(".fusion-footer").prepend('<div id="map" style="height:500px;width:100%;"></div>'); 
}
        });
       
</script>


<script type="text/javascript">
    jQuery(document).ready(function(){
 if(location.pathname.indexOf("/")!=-1){
    setTimeout(() => {
        jQuery("#nf-field-10").attr("onclick","yaCounter42136669.reachGoal('otpravka'); return true;");
    }, 3000);
            
        }
    });
</script>

<script>
		var fc = jQuery('#footer > div > div > div.fusion-social-links-footer > div > div > .fusion-social-network-icon.fusion-tooltip.fusion-facebook.fusion-icon-facebook');
		fc.replaceWith('<p class="fusion-social-network-icon fusion-tooltip fusion-facebook fusion-icon-facebook" style="color:#ffffff;" data-original-title="Facebook">' + fc.html() +'</p>');
</script>
<script>
	jQuery(document).ready(function() {
		jQuery('div.fusion-content-boxes:contains("ОБУЧЕНИЕ В РАССРОЧКУ")').addClass('addpdl');
	});
</script>
<script>
	jQuery(document).ready(function() {
		jQuery('#footer > div > div > div.fusion-social-links-footer > div > div > a:nth-child(5)').attr("href", "https://play.google.com/store/apps/details?id=ru.idriver.appidriver");
	});
</script>
<script>
	jQuery(document).ready(function() {
		jQuery('#footer > div > div > div.fusion-social-links-footer > div > div > a:nth-child(4)').attr("href", "https://apps.apple.com/ru/app/apple-store/id1317611475");
	});
</script>
<script>
	jQuery(document).ready(function() {
		jQuery('div#map > ymaps:nth-child(2)').remove();
	});
</script>


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(42136669, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/42136669" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

	</body>
</html>
