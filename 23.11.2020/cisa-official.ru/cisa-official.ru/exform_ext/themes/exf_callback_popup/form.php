<?php if(!isset($_REQUEST["mf_path"]) && !isset($_REQUEST["mf_captcha_code"])) die("Restricted access"); ?>

<script src="/exform_ext/plugins/jquery.maskedinput.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($){
 $('input[name="mf_phone"]').mask('+7(999) 999-99-99', {placeholder:'_'});
});
</script>

<div class="exform_wrapper <?php echo $config->theme; ?> crnrR10 brdrad7">
 <!--<div class="exform_header"><?php //echo $config->form_header;?><span class="close">X</span></div>-->
 <!--<div class="exform_addmsg"><?php //echo $config->form_addmsg;?></div>-->

  <form name="exform">
  <div class="inpt_wrpr">

  <?php 
	echo get_formfield('name');
	echo get_formfield('phone'); 
	//echo get_formfield('phone_time');
  ?>

   <?php if($config->enable_captcha) include 'incs/form_captcha.inc'; else {?><input type="hidden" name="mf_captcha_code" value="false" /><?php } ?>
  </div> 
   
  <div class="mf_submit">
   <?php if($config->button_close):?><input type="button" value="<?php echo $config->close_title;?>"><?php endif; ?>
   <input type="submit" value="<?php echo $config->submit_title;?>">
  </div>

  <input type="text" name="user_name" class="name" />
  <input type="hidden" name="mf_theme" value="<?php echo $_REQUEST["mf_theme"];?>" />
  <input type="hidden" name="send" value="yes" />
 </form>

</div>