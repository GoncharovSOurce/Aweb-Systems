<?php /* Wrapper Name: Footer */ ?>
<div class="row footer-widgets">
    <div class="span2" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-1">
        <?php dynamic_sidebar("footer-sidebar-1"); ?>
    </div>
    <div class="span1 vertical"></div>
    <div class="span2" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-2">
        <?php dynamic_sidebar("footer-sidebar-2"); ?>
    </div>
    <div class="span1 vertical"></div>
    <div class="span2" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-3">
        <?php dynamic_sidebar("footer-sidebar-3"); ?>
    </div>
    <div class="span1 vertical"></div>
    <div class="span2 contacts" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-4" rel="nofollow">

        <!--noindex--> <?php dynamic_sidebar("footer-sidebar-4"); ?>
        <!--/noindex-->
    </div>
</div>
<div class="row">
    <div class="span12">
        <div class="hr-bottom"></div>
    </div>
</div>
<div class="row copyright">
    <div class="span3" data-motopress-type="static" data-motopress-static-file="static/static-footer-text.php">
    	<?php get_template_part("static/static-footer-text"); ?>
    </div>
    <div class="span9" data-motopress-type="static" data-motopress-static-file="static/static-footer-nav.php">
    	<?php get_template_part("static/static-footer-nav"); ?>
    </div>
</div>