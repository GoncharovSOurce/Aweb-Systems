<?php
/**
 * mForm v2.0
 * Lopulyak Oleg < ol_lo@ukr.net >
 * Created 10.02.2013 ( updated 22.12.2014 )
*/

if(!isset($_REQUEST["mf_path"]) && !isset($_REQUEST["mf_captcha_code"])) die("Restricted access");?>
<div class="exform_wrapper <?php echo $config->theme; ?> brdrad7 boxshdw finmsg">
 <?php if(trim($config->final_header) != ''):?><div class="exform_header"><?php echo $config->final_header;?></div><?php endif;?>
 <p><?php echo $config->final_message;?></p>
</div>