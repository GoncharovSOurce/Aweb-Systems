<?php
/**
 * mForm v2.0
 * Lopulyak Oleg < ol_lo@ukr.net >
 * Created 10.02.2013 ( updates 30.04.2015 )
 */
 
if(!isset($_REQUEST['mf_path']) && !isset($_REQUEST['mf_captcha_code'])) die('Restricted access');

header('Content-Type: text/html; charset=utf-8', true); 
session_start();

require_once 'config.php';
if(file_exists('helpers/functions.inc')) require 'helpers/functions.inc';

$config = new mform_config;

$field_value = $field_class = array('name'		=>'',
									'phone'		=>'',
									'email'		=>'',
									'message'	=>'',
									'captcha'	=>''
									);


$PathTheme = 'themes/'.$_REQUEST['mf_theme'].'/';

if(file_exists($PathTheme.'config.php')) include $PathTheme.'config.php';
if(file_exists($PathTheme.'incs/functions.inc')) include $PathTheme.'incs/functions.inc';

$total_errors = 0;

if(isset($_REQUEST["mf_path"])){
 $_SESSION['mf_path'] = $_REQUEST["mf_path"];
 require $PathTheme.'form.php';
}

if(isset($_REQUEST['send'])){

 if($config->enable_captcha && isset($_REQUEST["mf_captcha_code"])){
  require 'captcha/securimage.php';
  $securimage = new Securimage();
 }
 
 require 'helpers/validator.php';
 if(file_exists($PathTheme.'incs/validator.inc')) require $PathTheme.'incs/validator.inc';

 if(!$total_errors){
  require $PathTheme.'mail.php';
  require 'helpers/sendmail.php';
  if(!$mail_status) $config->final_message = $config->error_mail;
  require $PathTheme.'final_msg.php';
 }
 else require $PathTheme.'form.php';
 
}
?> 